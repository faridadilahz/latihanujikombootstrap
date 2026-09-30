<div class="card text-center border-0 py-4 w-75">
    <h3 class="card-title fw-bold">Beri Ulasan Seycis</h3>
    <p class="text-secondary">Seberapa puas Anda terhadap layanan Seycis?</p>

    <form action="{{ route('review.store') }}" method="POST">
        @csrf
        <div class="d-flex align-items-center justify-content-center gap-2 mb-4 star-rating-group">
            @for ($i = 5; $i >= 1; $i--)
                <input type="radio" class="btn-check" name="rating" id="star{{ $i }}" value="{{ $i }}" required>
                <label class="btn border-0 fs-3 p-0 text-secondary label-star" for="star{{ $i }}" title="{{ $i }} Bintang">
                    <i class="fa-solid fa-star"></i>
                </label>
            @endfor
        </div>

        <button type="submit" class="btn btn-primary fw-semibold px-4 py-2">Kirim Rating</button>
    </form>
</div>

<style>
    .star-rating-group {
        flex-direction: row-reverse;
    }

    .star-rating-group .label-star i {
        color: #d1d5db;
        transition: all 0.2s ease-in-out;
    }

    .star-rating-group .label-star:hover ~ .label-star i,
    .star-rating-group .label-star:hover i {
        color: #ffc107 !important;
        transform: scale(1.15);
    }

    .star-rating-group .btn-check:checked + .label-star ~ .label-star i,
    .star-rating-group .btn-check:checked+ .label-star i {
        color: #ffc107 !important;
    }
</style>

@if (session('success'))
    <script>
        alert("{{ session('success') }}");
    </script>
@endif