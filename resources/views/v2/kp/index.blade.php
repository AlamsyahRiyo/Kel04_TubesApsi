<x-layout>
    <section class="container py-5">
        <h1>Berikut Data Mahasiswa yang Mengikuti Kerja Praktik</h1>

        <form class="input-group mt-4" method="GET">
            <input type="text" class="form-control" placeholder="Cari data..." aria-label="Recipient's username"
                aria-describedby="button-addon2" name="keyword" value="{{ $keyword }}">
            <button class="btn btn-primary" type="submit" id="button-addon2">Cari</button>
        </form>

        <table class="table table-striped table-hover mt-2">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Perusahaan</th>
                    <th scope="col">Bidang</th>
                    <th scope="col">Lokasi</th>
                    <th scope="col">Tanggal Masuk</th>
                    <th scope="col">Tanggal Keluar</th>
                    <th scope="col">Dosen Pembimbing</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($kp as $item)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->perusahaan }}</td>
                        <td>{{ $item->bidang }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>{{ $item->tanggal_masuk }}</td>
                        <td>{{ $item->tanggal_keluar }}</td>
                        <td>{{ $item->dosen_pembimbing }}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</x-layout>
