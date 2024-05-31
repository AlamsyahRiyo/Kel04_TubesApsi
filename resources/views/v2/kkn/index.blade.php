<x-layout>
    <section class="container py-5">
        <h1>Berikut Data Mahasiswa yang Mengikuti Kuliah Kerja Nyata</h1>

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
                    <th scope="col">Lokasi</th>
                    <th scope="col">Kelompok</th>
                    <th scope="col">Tema</th>
                    <th scope="col">Dosen</th>
                    <th scope="col">Periode</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($kkn as $item)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->lokasi }}</td>
                        <td>{{ $item->kelompok }}</td>
                        <td>{{ $item->tema }}</td>
                        <td>{{ $item->dosen }}</td>
                        <td>{{ $item->periode }}</td>
                    

                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</x-layout>
