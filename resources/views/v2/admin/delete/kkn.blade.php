<x-layout-admin>
    <h1>Berikut Data Mahasiswa yang Mengikuti KP</h1>

    <table class="table table-striped table-hover mt-4">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">NIM</th>
                <th scope="col">Nama</th>
                <!-- <th scope="col">Perusahaan</th> -->
                <!-- <th scope="col">Bidang</th> -->
                <th scope="col">Lokasi</th>
                <th scope="col">Kelompok</th>
                <th scope="col">Tema</th>
                <th scope="col">Dosen Pembimbing</th>
                <th scope="col">Periode</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <th scope="row">{{ $loop->index + 1 }}</th>
                    <td>{{ $item->nim }}</td>
                    <td>{{ $item->nama }}</td>
                    <!-- <td>{{ $item->perusahaan }}</td> -->
                    <!-- <td>{{ $item->bidang }}</td> -->
                    <td>{{ $item->lokasi }}</td>
                    <td>{{ $item->kelompok }}</td>
                    <td>{{ $item->tema }}</td>
                    <td>{{ $item->dosen }}</td>
                    <td>{{ $item->periode }}</td>

                    <td>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal"
                            data-bs-target="#modal-confirm-delete-{{ $item->id }}">Hapus</button>
                    </td>
                </tr>

                <div class="modal fade" id="modal-confirm-delete-{{ $item->id }}" tabindex="-1"
                    aria-labelledby="modal-confirm-delete-label" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="modal-confirm-delete-label">Konfirmasi</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah Anda yakin akan menghapus data <strong>{{ $item->nama }}</strong> dari
                                    database?
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <form action="{{ route('admin.delete.kp', ['id' => $item->id]) }}" method="GET">
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </tbody>
    </table>

</x-layout-admin>
