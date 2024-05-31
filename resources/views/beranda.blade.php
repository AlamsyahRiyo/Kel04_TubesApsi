<x-layout>
    <section class="container py-5" style="max-width: 768px; margin: 0 auto">
        <h1>SUGENG RAWUH</h1>

        <h2>Selamat Datang di Laman Prodi Teknik Industri UNS</h2>

        <p>
            Laman ini Merupakan Informasi Mahasiswa yang Melaksanakan Kegiatan MBKM, KKN, dan KP
        </p>

        <div class="row px-4">
            @foreach ($data as $item)
                <div class="card mt-2">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item['title'] }}</h5>
                        <p class="card-text">{{ $item['description'] }}
                        </p>
                        <a href="{{ $item['url'] }}" class="btn btn-primary">Lihat selengkapnya</a>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-layout>
