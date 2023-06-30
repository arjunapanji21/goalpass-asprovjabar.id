<!DOCTYPE html>
<html>
<head>
    <title>PDF Viewer</title>
    <style>
        #pdf-viewer {
            width: 100%;
            height: 600px;
        }
        #pdf-viewer canvas {
            width: 100%;
            height: 400;
        }
    </style>
</head>
<body>
    <div id="pdf-viewer"></div>

    <script src="{{ asset('js/pdfjs-dist/build/pdf.js') }}"></script>
    <script>
        var pdfUrl = '{{$url}}'; // Ganti dengan URL atau path file PDF Anda

        // Inisialisasi PDF.js
        pdfjsLib.getDocument(pdfUrl).promise.then(function(pdf) {
            // Muat halaman pertama PDF
            pdf.getPage(1).then(function(page) {
                var canvas = document.createElement('canvas');
                var canvasContext = canvas.getContext('2d');

                // Render halaman PDF ke dalam elemen canvas
                var viewport = page.getViewport({ scale: 4.0 });
                canvas.width = viewport.width;
                canvas.height = viewport.height;
                page.render({ canvasContext, viewport });

                // Tambahkan elemen canvas ke dalam div PDF viewer
                document.getElementById('pdf-viewer').appendChild(canvas);
            });
        });
    </script>
</body>
</html>