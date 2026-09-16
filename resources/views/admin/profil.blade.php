<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>Profil - Seruli</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS v5.3.8 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous" />

        <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <header>
        <!-- place navbar here -->
    </header>
    <main class="d-flex min-vh-100">
        @include('partials.admin.sidebar')
        <div class="flex-grow-1 p-4 px-4" style="background-color: #f5f5f5;">

            <div class="col-md-0 col-sm-4">
                <div class="card border-0 rounded-3 mb-3">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center">
                        <img src="../assets/img/logoseruliblue.png" class="rounded-3" style="max-width: 192px;">
                        <div class="d-flex flex-column">
                            <h3 class="card-title fw-bold">Admin Seruli</h3>
                            <p class="text-secondary">adminseruli@gmail.com</p>
                        </div>
                    </div>
                </div>

            
                    <form action="{{ route('logout') }}" method="post"
                        onsubmit="return confirm('Apakah Anda yakin keluar dari akun ini?')">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger w-100"><i
                                class="fa-solid fa-right-from-bracket me-3 width-fixed"></i>Keluar
                        </button>
                    </form>
                

            </div>
        </div>
    </main>
    <footer>
        <!-- place footer here -->
    </footer>
    <!-- Bootstrap JavaScript Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
    </script>
</body>

</html>
