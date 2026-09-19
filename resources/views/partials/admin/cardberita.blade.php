@forelse ($beritas as $item)
    <div class="col-md-4 col-sm-6">
        <div class="card h-100 rounded-4 shadow-sm border-0">
            <a href="{{ route('berita.show', $item->id) }}" class="text-decoration-none text-dark">
            <img src="{{ asset('storage/' . $item->gambarberita) }}" class="card-img-top"
                style="height: 200px; object-fit: cover;">
            <div class="card-body text-start">
                <small class="text-secondary">{{ $item->created_at->locale('id')->translatedFormat('d F Y') }}</small>
                <h5 class="card-title fw-bold">{{ Str::limit($item->judulberita, 96) }}</h5>
                <p class="card-text text-secondary">{{ Str::limit($item->deskripsiberita, 124) }}</p>
            </div>

            <div class="card-footer p-3 mt-auto">
                <div class="d-flex flex-column gap-2">
                    <a href="{{ route('berita.edit', $item->id) }}" class="btn btn-primary fw-semibold p-2">Edit</a>

                    <form action="{{ route('berita.destroy', $item->id) }}" method="POST"
                        onsubmit="return confirm('Apakah Anda yakin ingin menghapus berita ini?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger p-2 w-100">Hapus</button>
                    </form>
                </div>
            </div>
        </a>
        </div>
    </div>

@empty
    <!-- Tampilan jika tidak ada berita -->
    <div class="col-12 py-5">
        <div class="text-secondary text-center">
            <i class="fa-solid fa-newspaper fs-1 mb-3"></i>
            <h5>Belum Ada Berita</h5>
            <p class="small">Klik tombol "Posting Berita" di atas untuk menambahkan berita baru.</p>
        </div>
    </div>
@endforelse
