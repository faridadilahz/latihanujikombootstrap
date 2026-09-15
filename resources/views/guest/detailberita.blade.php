<!doctype html>
<html lang="en" data-bs-theme="light">

<head>
    <title>{{ $beritas->judulberita }} - Seruli</title>
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
    <main class="mt-5 pt-6" style="background-color: #f5f5f5;">
        <div class="d-flex text-center flex-column justify-content-center align-items-center px-5 py-5">
            <h2 class="fw-bold mb-3">{{ $beritas->judulberita }}</h2>
            <img src="{{ asset('storage/' . $beritas->gambarberita) }}" alt="" class="rounded-3 mb-3"
                style="max-width: 850px;">
            <p class="text-secondary" style="max-width: 850px;">{{ $beritas->deskripsiberita }}</p>
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
