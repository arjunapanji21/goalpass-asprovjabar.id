<?php

namespace App\Http\Controllers;

use App\Models\Anggota;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function landing_page()
    {
        return inertia()->render('landing_page');
    }
    public function beranda()
    {
        $master = [
            'title' => 'Beranda',
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
        $master = [
            'title' => 'Profil Anggota',
            'anggota' => Anggota::where('kd_kartu', $kd_kartu)->get()->first(),
        ];
        if (auth()->user()->role == "Super Admin") {
            return inertia()->render('superadmin/anggota_profile', compact('master'));
        } else if (auth()->user()->role == "Admin") {
            return inertia()->render('admin/anggota_profile', compact('master'));
        } else if (auth()->user()->role == "User") {
            return inertia()->render('user/anggota_profile', compact('master'));
        }
    }
    public function anggota()
    {
        $master = [
            'title' => 'Anggota',
            'anggota' => Anggota::all(),
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
}
