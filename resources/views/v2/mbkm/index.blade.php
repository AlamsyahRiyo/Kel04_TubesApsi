<x-layout>
    <section class="container py-5">
        <h1>Berikut Data Mahasiswa yang Mengikuti MBKM</h1>

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
                    <th scope="col">Status</th>
                    <th scope="col">Perusahaan</th>
                    <th scope="col">Alamat</th>
                    <!-- <th scope="col">Status Selesai</th> -->
                    <th scope="col">Rekognisi SKS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($mbkm as $item)
                    <tr>
                        <th scope="row">{{ $loop->index + 1 }}</th>
                        <td>{{ $item->nim }}</td>
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->status }}</td>
                        <td>{{ $item->perusahaan }}</td>
                        <td>{{ $item->alamat }}</td>
                        <!-- <td>{{ $item->status_selesai }}</td> -->
                        <td>{{ $item->rekognisi_sks }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </section>
</x-layout>
