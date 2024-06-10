<x-layout-admin>
    <form action="{{ route('admin.create.mbkm') }}" method="POST" style="max-width: 512px">
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
            <label for="input-status" class="form-label">Status</label>
            <input type="text" class="form-control" id="input-status" aria-describedby="status-help"
                name="status" value="{{ old('status') }}">

            @error('status')
                <div id="status-help" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="input-perusahaan" class="form-label">Perusahaan</label>
            <input type="text" class="form-control" id="input-perusahaan" aria-describedby="perusahaan-help" name="perusahaan"
                value="{{ old('perusahaan') }}">

            @error('perusahaan')
                <div id="perusahaan-help" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="input-alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="input-alamat" aria-describedby="alamat-help" name="alamat"
                value="{{ old('alamat') }}">

            @error('alamat')
                <div id="alamat-help" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="input-status_selesai" class="form-label">Status Selesai</label>
            <input type="text" class="form-control" id="input-status_selesai" aria-describedby="status_selesai-help"
                name="status_selesai" value="Selesai">

            @error('status_selesai')
                <div id="status_selesai-help" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="input-rekognisi" class="form-label">Rekognisi</label>
            <input type="text" class="form-control" id="input-rekognisi" aria-describedby="rekognisi-help"
                name="rekognisi_sks" value="{{ old('rekognisi_sks') }}">

            @error('rekognisi_sks')
                <div id="rekognisi-help" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</x-layout-admin>
