<header class="d-flex justify-content-between rounded-3 align-items-center bg-white p-3 mb-4">

    <div class="topbar-left">
        @if (request()->Routeis('admin.dasbor') || request()->is('admin/dasbor'))
            <h4 class="fw-bold">Dasbor Seruli</h4>
            <p class="text-secondary">Selamat datang kembali di panel kontrol Admin Seruli.</p>
        @elseif(request()->Routeis('admin.galeri*') || request()->is('admin/galeri*'))
            <h4 class="fw-bold">Kelola Galeri</h4>
            <p class="text-secondary">Tambah, ubah, atau hapus postingan galeri sekolah.</p>
        @elseif(request()->Routeis('admin.profil*') || request()->is('admin/profil*'))
            <h4 class="fw-bold">Profil Admin</h4>
            <p class="text-secondary">Kelola Profil Admin Seruli.</p>
        @endif
    </div>
</header>
