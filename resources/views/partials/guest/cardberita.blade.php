@forelse ($beritas as $item)

<div class="col-md-4 col-sm-6">
    <div class="card h-100 shadow-sm border-0">
        <img src="{{ asset('storage/' . $item->gambarberita) }}" class="card-img-top" style="height: 200px; object-fit: cover;">
        <div class="card-body text-start">
            <small class="text-secondary">{{ $item->created_at->locale('id')->translatedFormat('d F Y') }}</small>
            <h5 class="card-title fw-bold">{{ Str::limit($item->judulberita, 36) }}</h5>
            <p class="text-secondary text-truncate">{{ Str::limit($item->deskripsiberita, 124) }}</p>
            <div class="d-flex flex-column">
                <a href="{{ route('guest.detailberita', $item->id) }}" class="btn btn-primary p-2 fw-semibold">Baca Selengkapnya</a>
            </div>
        </div>
    </div>
</div>

@empty
    <div class="col-12 py-5">
        <div class="text-secondary text-center">
            <i class="fa-solid fa-newspaper fs-1 mb-3"></i>
            <h5>Belum ada berita</h5>
        </div>
    </div>
@endforelse