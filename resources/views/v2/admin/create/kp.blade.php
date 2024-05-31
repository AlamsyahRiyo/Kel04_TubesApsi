<x-layout-admin>
    <form action="{{ route('admin.create.kp') }}" method="POST" style="max-width: 512px">
        @csrf

        <div class="mb-3">
            <label for="input-nim" class="form-label">Nomor Induk Mahasiswa</label>
            <input type="text" class="form-control" id="input-nim" aria-describedby="nim-help" name="nim"
                value="{{ old('nim') }}">

            @error('nim')
                <div id="nim-help" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="input-nama" class="form-label">Nama Mahasiswa</label>
            <input type="text" class="form-control" id="input-nama" aria-describedby="nama-help" name="nama"
                value="{{ old('nama') }}">

            @error('nama')
                <div id="nama-help" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="input-perusahaan" class="form-label">Perusahaan</label>
            <input type="text" class="form-control" id="input-perusahaan" aria-describedby="perusahaan-help"
                name="perusahaan" value="{{ old('perusahaan') }}">

            @error('perusahaan')
                <div id="perusahaan-help" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="input-bidang" class="form-label">Bidang</label>
            <input type="text" class="form-control" id="input-bidang" aria-describedby="bidang-help" name="bidang"
                value="{{ old('bidang') }}">

            @error('bidang')
                <div id="bidang-help" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="input-lokasi" class="form-label">Lokasi</label>
            <input type="text" class="form-control" id="input-lokasi" aria-describedby="lokasi-help" name="lokasi"
                value="{{ old('lokasi') }}">

            @error('lokasi')
                <div id="lokasi-help" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="input-tanggal-masuk" class="form-label">Tanggal Masuk</label>
            <input type="date" class="form-control" id="input-tanggal-masuk" aria-describedby="tanggal-masuk-help"
                name="tanggal_masuk" value="{{ old('tanggal_masuk') }}">

            @error('tanggal_masuk')
                <div id="tanggal-masuk-help" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="input-tanggal-keluar" class="form-label">Tanggal Keluar</label>
            <input type="date" class="form-control" id="input-tanggal-keluar" aria-describedby="tanggal-keluar-help"
                name="tanggal_keluar" value="{{ old('tanggal_keluar') }}">

            @error('tanggal_keluar')
                <div id="tanggal-keluar-help" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="input-dosen-pembimbing" class="form-label">Dosen Pembimbing</label>
            <input type="text" class="form-control" id="input-dosen-pembimbing"
                aria-describedby="dosen-pembimbing-help" name="dosen_pembimbing" value="{{ old('dosen_pembimbing') }}">

            @error('dosen_pembimbing')
                <div id="dosen-pembimbing-help" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

</x-layout-admin>
