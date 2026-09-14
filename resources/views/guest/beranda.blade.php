<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Beranda - Seruli</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />
</head>

<body>
    <header>
        @include('partials.guest.navbar')
    </header>
    <main style="background-color: #f5f5f5;">
        <div class="d-flex text-center bg-primary min-vh-100 justify-content-center align-items-center">
            <div class="container">
                <h1 class="fw-bold mb-2 text-white">Selamat Datang di Website Resmi Sekolah Seru Sekali</h1>
                <p class="text-secondary text-white">Mewujudkan generasi unggul, berkarakter, dan kompeten di bidang
                    teknologi dan kejuruan. Siap kerja, santun, mandiri, dan kreatif.</p>


                <div class="container">
                    <a href="/berita" class="btn btn-light fw-semibold text-primary me-2">Lihat Berita</a>
                    <a href="/galeri" class="btn btn-outline-light fw-semibold text-white">Lihat Galeri</a>
                </div>
            </div>
        </div>

        <div class="d-flex text-center min-vh-100 justify-content-center align-items-center">
            <div class="container">
                <h1 class="fw-bold mb-3 text-black">Mewujudkan generasi unggul, berkarakter, dan kompeten di bidang teknologi dan kejuruan. Siap kerja, santun, mandiri, dan kreatif.</h1>
                <p class="text-secondary">Sekolah Seru Sekali merupakan salah satu Sekolah Menengah Kejuruan negeri unggulan di Kota Bogor yang berkomitmen mencetak lulusan berkarakter, kompeten, dan siap bersaing di dunia industri global. Dengan kurikulum yang terintegrasi dengan kebutuhan industri modern serta fasilitas pembelajaran berbasis teknologi, Sekolah Seru Sekali terus berinovasi dalam melahirkan generasi muda yang ahli di bidangnya.</p>
            </div>
        </div>

        <div class="d-flex text-center flex-wrap justify-content-center align-items-center px-5 py-5">
            <h2 class="fw-bold mb-3">Jurusan di Seruli</h2>
            <div class="d-flex gap-4">
                <div class="card shadow-sm border-0 py-3 px-3">
                    <h3 class="card-title">PPLG</h3>
                    <p class="text-secondary">Pengembangan Perangkat Lunak dan Gim</p>
                </div>
                <div class="card shadow-sm border-0 py-3 px-3">
                    <h3 class="card-title">TJKT</h3>
                    <p class="text-secondary">Teknik Jaringan Komputer dan Telekomunikasi</p>
                </div>
                <div class="card shadow-sm border-0 py-3 px-3">
                    <h3 class="card-title">TKRO</h3>
                    <p class="text-secondary">Teknik Kendaraan Ringan Otomotif</p>
                </div>
                <div class="card shadow-sm border-0 py-3 px-3">
                    <h3 class="card-title">TPFL</h3>
                    <p class="text-secondary">Teknik Pengelasan dan Fabrikasi Logam</p>
                </div>
            </div>
        </div>

        <div class="d-flex text-center flex-wrap justify-content-center align-items-center px-5 py-5">
            <div class="container">
            <h2 class="fw-bold mb-3">Berita Seruli</h2>
            <div class="row g-4 justify-content-center">
                @include('partials.guest.cardberita')
            </div>
            </div>
        </div>

        <div class="d-flex text-center flex-wrap justify-content-center align-items-center px-5 py-5">
            <div class="container">
            <h2 class="fw-bold mb-3">Galeri Seruli</h2>
            <div class="row g-4 justify-content-center">
                @include('partials.guest.cardgaleri')
            </div>
            </div>
        </div>

    </main>
    <footer>
        @include('partials.guest.footer')
    </footer>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
