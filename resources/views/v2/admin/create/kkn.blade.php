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
            <label for="input-lokasi" class="form-label">Perusahaan</label>
            <input type="text" class="form-control" id="input-lokasi" aria-describedby="lokasi-help"
                name="lokasi" value="{{ old('lokasi') }}">

            @error('lokasi')
                <div id="lokasi-help" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="input-kelompok" class="form-label">Kelompok</label>
            <input type="text" class="form-control" id="input-kelompok" aria-describedby="kelompok-help" name="kelompok"
                value="{{ old('kelompok') }}">

            @error('kelompok')
                <div id="kelompok-help" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="input-tema" class="form-label">Tema</label>
            <input type="text" class="form-control" id="input-tema" aria-describedby="tema-help" name="tema"
                value="{{ old('tema') }}">

            @error('tema')
                <div id="tema-help" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="input-dosen" class="form-label">Dosen</label>
            <input type="text" class="form-control" id="input-dosen" aria-describedby="dosen-help"
                name="dosen" value="{{ old('dosen') }}">

            @error('Dosen')
                <div id="dosen-help" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="input-periode" class="form-label">Periode</label>
            <input type="date" class="form-control" id="input-periode" aria-describedby="periode-help"
                name="periode" value="{{ old('periode') }}">

            @error('Periode')
                <div id="periode-help" class="form-text text-danger">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>

</x-layout-admin>
