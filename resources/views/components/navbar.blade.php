<nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('beranda') }}">
            <img src="{{ asset('assets/tiuns.jpg') }}" alt="Logo" width="32" height="32"
                class="d-inline-block align-text-top">
            Industrial Dashboard
        </a>
        <form class="d-flex" role="search">
            @if (Auth::check())
                <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
            @else
                <a class="btn btn-primary" href="{{ route('login') }}">Login</a>
            @endif
        </form>
    </div>
</nav>
