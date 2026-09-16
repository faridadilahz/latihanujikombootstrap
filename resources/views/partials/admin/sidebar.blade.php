<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<div class="d-flex flex-column flex-shrink-0 bg-white p-3 text-primary sticky-top vh-100 overflow-y-auto"
    style="width: 256px;">

    <a href="/admin/dasbor" class="d-flex text-decoration-none px-2 mb-4">

        <img src="../assets/img/logoseruliblue.png" alt="" class="me-1" style="max-width: 36px; object-fit: cover;">

        <span class="fs-4 fw-bold">Seruli</span>
    </a>

    <ul class="nav nav-pills flex-column">
        <li class="nav-item">
            <a href="/admin/dasbor"
                class="nav-link mb-2 text-primary {{ request()->is('admin/dasbor*') ? 'active text-white' : '' }}"
                aria-current="page"><i class="fa-solid fa-house me-3 width-fixed"></i>Dasbor</a>
        </li>
        <li class="nav-item">
            <a href="/admin/berita"
                class="nav-link mb-2 text-primary {{ request()->is('admin/berita*') ? 'active text-white' : '' }}"
                aria-current="page"><i class="fa-solid fa-newspaper me-3 width-fixed"></i>Kelola Berita</a>
        </li>
        <li class="nav-item">
            <a href="/admin/galeri"
                class="nav-link mb-2 text-primary {{ request()->is('admin/galeri*') ? 'active text-white' : '' }}"
                aria-current="page"><i class="fa-solid fa-image me-3 width-fixed"></i>Kelola Galeri</a>
        </li>
    </ul>

    <ul class="nav nav-pills flex-column mt-auto">
        <li class="nav-item">
            <a href="/admin/profil"
                class="nav-link mb-2 text-primary {{ request()->is('admin/profil*') ? 'active text-white' : '' }}"
                aria-current="page"><i class="fa-solid fa-user me-3 width-fixed"></i>Profil</a>
        </li>

        <li class="nav-item">
            <form action="{{ route('logout') }}" method="post" onsubmit="return confirm('Apakah Anda yakin keluar dari akun ini?')">
                @csrf
                <button type="submit" class="nav-link text-danger w-100 text-start border-0 bg-transparent"><i
                        class="fa-solid fa-right-from-bracket me-3 width-fixed"></i>Keluar
                </button>
            </form>
    </ul>
    </li>
</div>
