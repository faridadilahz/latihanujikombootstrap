<div class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top z-3 p-3 px-5">
    <a href="/beranda" class="navbar-brand fw-bold text-white">Seruli</a>

    <div class="collapse navbar-collapse position-absolute start-50 translate-middle-x">
        <ul class="navbar-nav">
            <li class="nav-item-active me-4">
                <a href="/beranda" class="nav-link {{ request()->is('beranda') || request()->is('/') ? 'active' : '' }}">Beranda</a>
            </li>
            <li class="nav-item-active me-4">
                <a href="/berita" class="nav-link {{ request()->is('berita') || request()->is('/') ? 'active' : '' }}">Berita</a>
            </li>
            <li class="nav-item-active me-4">
                <a href="/galeri" class="nav-link {{ request()->is('galeri') || request()->is('/') ? 'active' : '' }}">Galeri</a>
            </li>
        </ul>
    </div>

    <div class="ms-auto">
        <a href="/login" class="btn btn-light fw-semibold text-primary">Masuk</a>
    </div>
</div>