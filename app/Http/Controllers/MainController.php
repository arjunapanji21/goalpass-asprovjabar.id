<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

use Imagick;
use ImagickPixel;

use setasign\Fpdi\Tcpdf\Fpdi;
use Intervention\Image\Facades\Image;


use SimpleSoftwareIO\QrCode\Facades\QrCode;

class MainController extends Controller
{
    public function landing_page()
    {
        return inertia()->render('landing_page');
    }
    public function beranda()
    {
        $wilayah = [];
        $anggota = Anggota::all();
        $u13 = Anggota::where('umur', 'like', '%U-13%')->get();
        $u15 = Anggota::where('umur', 'like', '%U-15%')->get();
        $u17 = Anggota::where('umur', 'like', '%U-17%')->get();
        $senior = Anggota::where('umur', 'like', '%SENIOR%')->get();
        foreach ($anggota->groupBy('kota_kab') as $key => $row) {
            $data = [
                'kota' => $key,
                'u13' => isset($row->groupBy('umur')['U-13']) ? count($row->groupBy('umur')['U-13']) : 0,
                'u15' => isset($row->groupBy('umur')['U-15']) ? count($row->groupBy('umur')['U-15']) : 0,
                'u17' => isset($row->groupBy('umur')['U-17']) ? count($row->groupBy('umur')['U-17']) : 0,
                'senior' => isset($row->groupBy('umur')['SENIOR']) ? count($row->groupBy('umur')['SENIOR']) : 0
            ];
            array_push($wilayah, $data);
        }
        $master = [
            'title' => 'Beranda',
            'anggota' => count($anggota),
            'u13' => count($u13),
            'u15' => count($u15),
            'u17' => count($u17),
            'senior' => count($senior),
            'wilayah' => $wilayah
        ];
        if (auth()->user()->role == "Super Admin") {
            return inertia()->render('superadmin/home', compact('master'));
        } else if (auth()->user()->role == "Admin") {
            return inertia()->render('admin/home', compact('master'));
        } else if (auth()->user()->role == "User") {
            return inertia()->render('user/home', compact('master'));
        }
    }
    public function anggota_profile($kd_kartu)
    {
        $anggota = Anggota::where('kd_kartu', $kd_kartu)->get()->first();
        if ($anggota->umur == "U-9") {
            $templateKartu = public_path('template_kartu/u-9.pdf');
        } else if ($anggota->umur == "U-11") {
            $templateKartu = public_path('template_kartu/u-11.pdf');
        } else if ($anggota->umur == "U-13") {
            $templateKartu = public_path('template_kartu/u-13.pdf');
        } else if ($anggota->umur == "U-15") {
            $templateKartu = public_path('template_kartu/u-15.pdf');
        } else if ($anggota->umur == "U-17") {
            $templateKartu = public_path('template_kartu/u-17.pdf');
        } else if ($anggota->umur == "SENIOR") {
            $templateKartu = public_path('template_kartu/senior.pdf');
        }

        $master = [
            'title' => 'Profil Anggota',
            'anggota' => $anggota,
            'template_kartu' => $templateKartu,
        ];

        if (auth()->user()->role == "Super Admin") {
            return inertia()->render('superadmin/anggota_profile', compact('master'));
        } else if (auth()->user()->role == "Admin") {
            return inertia()->render('admin/anggota_profile', compact('master'));
        } else if (auth()->user()->role == "User") {
            return inertia()->render('user/anggota_profile', compact('master'));
        }
    }
    public function anggota(Request $request)
    {
        $anggota = Anggota::orderBy('id', 'asc');
        if ($request['filter'] == "nama") {
            $anggota->where('nama', 'like', "%{$request['search']}%");
        } else if ($request['filter'] == "kd_kartu") {
            $anggota->where('kd_kartu', 'like', "%{$request['search']}%");
        } else if ($request['filter'] == "klub") {
            $anggota->where('klub', 'like', "%{$request['search']}%");
        }
        if ($request['umur'] != "all") {
            $anggota->where('umur', 'like', "%{$request['umur']}%");
        }
        $master = [
            'title' => 'Anggota',
            'anggota' => $anggota->paginate(30),
            'filter' => $request['filter'] != "nama" ? $request['filter'] : "nama",
            'umur' => $request['umur'] != "all" ? $request['umur'] : "all",
            'search' => $request['search'] != null ? $request['search'] : null,
        ];
        if (auth()->user()->role == "Super Admin") {
            return inertia()->render('superadmin/anggota', compact('master'));
        } else if (auth()->user()->role == "Admin") {
            return inertia()->render('admin/home', compact('master'));
        } else if (auth()->user()->role == "User") {
            return inertia()->render('user/home', compact('master'));
        }
    }
    public function anggota_tambah()
    {
        $master = [
            'title' => 'Tambah Anggota Baru',
        ];
        if (auth()->user()->role == "Super Admin") {
            return inertia()->render('superadmin/anggota_tambah', compact('master'));
        } else if (auth()->user()->role == "Admin") {
            return inertia()->render('admin/home', compact('master'));
        } else if (auth()->user()->role == "User") {
            return inertia()->render('user/home', compact('master'));
        }
    }
    public function admin()
    {
        $master = [
            'title' => 'Admin',
        ];
        if (auth()->user()->role == "Super Admin") {
            return inertia()->render('superadmin/admin', compact('master'));
        } else if (auth()->user()->role == "Admin") {
            return inertia()->render('admin/home', compact('master'));
        } else if (auth()->user()->role == "User") {
            return inertia()->render('user/home', compact('master'));
        }
    }

    public function cetakKartu($kd_kartu)
    {
        $anggota = Anggota::where("kd_kartu", $kd_kartu)->get()->first();
        $pdf = new Fpdi();

        // Get the path to the existing PDF file
        if ($anggota->umur == "U-9") {
            $existingPdfPath = public_path('template_kartu/u-9.pdf');
        } else if ($anggota->umur == "U-11") {
            $existingPdfPath = public_path('template_kartu/u-11.pdf');
        } else if ($anggota->umur == "U-13") {
            $existingPdfPath = public_path('template_kartu/u-13.pdf');
        } else if ($anggota->umur == "U-15") {
            $existingPdfPath = public_path('template_kartu/u-15.pdf');
        } else if ($anggota->umur == "U-17") {
            $existingPdfPath = public_path('template_kartu/u-17.pdf');
        } else if ($anggota->umur == "SENIOR") {
            $existingPdfPath = public_path('template_kartu/senior.pdf');
        }

        // Set the source file
        $pdf->setSourceFile($existingPdfPath);

        // Import the first page
        $templateId = $pdf->importPage(1);

        // Get the size of the imported page
        $size = $pdf->getTemplateSize($templateId);
        $pdf->SetAutoPageBreak(false);



        // Add a new page with the same size as the imported page
        $pdf->AddPage($size['orientation'], [$size['width'], $size['height']]);
        $marginLeft = 0;    // Left margin
        $marginTop = 0;     // Top margin
        $marginRight = 0;   // Right margin
        $marginBottom = 0;  // Bottom margin

        $pdf->SetMargins($marginLeft, $marginTop, $marginRight, $marginBottom);

        // Use the imported page as a template
        $pdf->useTemplate($templateId);

        // Set the font and font size for the text
        $pdf->SetFont('Bahnschrift', 'B', 10);
        $pdf->SetTextColor(255, 255, 255);

        // Add the text to the new page
        $pdf->Text(10, 18, strtoupper($anggota->klub) . ' / ' . $anggota->kota_kab);

        $pdf->SetFont('Bahnschrift', 'B', 18);
        $pdf->SetTextColor(255, 255, 255);

        // Add the text to the new page
        //$pdf->Text(10, 22, '0099 0909 0909 0909');

        $pdf->SetFont('Bahnschrift');

        $pdf->SetTextColor(255, 255, 255);

        // Add the text to the new page
        if (strlen($anggota->nama) > 28)
            $pdf->SetFontSize(8.5);
        else
            $pdf->SetFontSize(9.5);

        $pdf->Text(28, 31, strtoupper($anggota->nama));

        // Add the text to the new page
        $pdf->Text(28, 35, date('d / m / Y', strtotime($anggota->tgl_lahir)));

        $pdf->SetFontSize(10);

        $pdf->Text(35.2, 46.5, $anggota->expired);

        // Path to the source image
        $sourceImagePath = public_path('foto_anggota/' . $anggota->foto);

        $image = new Imagick($sourceImagePath);
        $image->roundCorners(20, 20);
        // Set the background color (optional)

        $savePath = public_path('foto_rounded.png'); // Path to save the image

        $image->writeImage($savePath);


        $pdf->Image($savePath, 9.7, 32.2, 15.7, 19); // Adjust the coordinates and dimensions as needed

        $qrCodeImagePath = $this->generateQrCode($anggota->kd_kartu);
        $pdf->Image($qrCodeImagePath, 50.65, 38.5, 14.3, 14.3);

        $umur = $anggota->umur;
        $length = strlen($umur);
        $umurangka = substr($umur, $length - 2);

        // Output the modified PDF
        $file_path = public_path('kartu_anggota/') . $umurangka . '-' . $anggota->no_xls . '-' . $anggota->nama . '-' . $anggota->kd_kartu . '.pdf';

        $url =  url('kartu_anggota') . '/' . $umurangka . '-' . $anggota->no_xls . '-' . $anggota->nama . '-' . $anggota->kd_kartu . '.pdf';

        $anggota->update([
            'jml_cetak' => $anggota->jml_cetak + 1
        ]);

        $pdf->Output($file_path, 'F');

        echo '<embed src="' . $url . '" type="application/pdf" width="100%" height="600px" />';
    }

    public function cekKartu($kd_kartu)
    {
        // $anggota = Anggota::where("kd_kartu", $kd_kartu)->get()->first();


        // $umur = $anggota->umur;
        // $length = strlen($umur);
        // $umurangka = substr($umur, $length - 2);


        // // Output the modified PDF
        // $file_path = public_path('kartu_anggota/') . $umurangka . '-' . $anggota->no_xls . '-' . $anggota->nama . '-' . $anggota->kd_kartu . '.pdf';

        // $url =  url('kartu_anggota') . '/' . $umurangka . '-' . $anggota->no_xls . '-' . $anggota->nama . '-' . $anggota->kd_kartu . '.pdf';


        // return view('pdfviewer', compact('url'));
        $anggota = Anggota::where('kd_kartu', $kd_kartu)->get()->first();
        if ($anggota->umur == "U-9") {
            $templateKartu = public_path('template_kartu/u-9.pdf');
        } else if ($anggota->umur == "U-11") {
            $templateKartu = public_path('template_kartu/u-11.pdf');
        } else if ($anggota->umur == "U-13") {
            $templateKartu = public_path('template_kartu/u-13.pdf');
        } else if ($anggota->umur == "U-15") {
            $templateKartu = public_path('template_kartu/u-15.pdf');
        } else if ($anggota->umur == "U-17") {
            $templateKartu = public_path('template_kartu/u-17.pdf');
        } else if ($anggota->umur == "SENIOR") {
            $templateKartu = public_path('template_kartu/senior.pdf');
        }

        $master = [
            'title' => 'Profil Anggota',
            'anggota' => $anggota,
            'template_kartu' => $templateKartu,
        ];

        return inertia()->render('anggota_profile_public', compact('master'));
    }

    public function generateQrCode($kd_kartu)
    {
        // QR code content (e.g., a URL)
        $content = 'https://goalpass-asprovjabar.id/cekdata/' . $kd_kartu;

        // Generate the QR code image
        $qrCodeImagePath = public_path('qr/qrcode.png');
        QrCode::size(200)->format('png')->generate($content, $qrCodeImagePath);

        // Return the path to the QR code image
        return $qrCodeImagePath;
    }
}
