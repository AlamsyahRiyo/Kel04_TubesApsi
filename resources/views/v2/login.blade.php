<x-layout>
    <section class="container py-5" style="max-width: 512px; margin: 0 auto">
        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Alamat email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="email" value="{{ old('email') }}">

                @error('email')
                    <div id="emailHelp" class="form-text text-danger">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Kata sandi</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Masuk</button>
        </form>
    </section>
</x-layout>
