@php
    $menus = [
        [
            'title' => 'Tambah Data MBKM',
            'url' => 'admin/create/mbkm',
        ],
        [
            'title' => 'Tambah Data KP',
            'url' => 'admin/create/kp',
        ],
        [
            'title' => 'Tambah Data KKN',
            'url' => 'admin/create/kkn',
        ],
        [
            'title' => 'Hapus Data MBKM',
            'url' => 'admin/delete/mbkm',
        ],
        [
            'title' => 'Hapus Data KP',
            'url' => 'admin/delete/kp',
        ],
        [
            'title' => 'Hapus Data KKN',
            'url' => 'admin/delete/kkn',
        ],
    ];
@endphp

<x-layout>
    <section class="container py-5">
        <div class="row">
            <div class="col col-3">
                <div class="list-group">
                    <a href="/admin" @class([
                        'list-group-item list-group-item-action',
                        'active' => Request::is('admin'),
                    ])>
                        Halaman Utama
                    </a>
                    @foreach ($menus as $menu)
                        <a href="/{{ $menu['url'] }}" @class([
                            'list-group-item list-group-item-action',
                            'active' => Request::is($menu['url']),
                        ])>
                            {{ $menu['title'] }}
                        </a>
                    @endforeach
                </div>
            </div>
            <div class="col col-9">{{ $slot }}</div>
        </div>
    </section>
</x-layout>
