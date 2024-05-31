<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller {
    public function index() {
        $data = [
            [
                'title' => 'MBKM',
                'description' => 'MBKM adalah Program ini merupakan inisiatif dari Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi (Kemendikbudristek)',
                'url' => '/mbkm',
            ],
            [
                'title' => 'KKN',
                'description' => 'KKN adalah program wajib yang biasanya diikuti oleh mahasiswa di Indonesia sebagai bagian dari kurikulum pendidikan tinggi mereka. Program ini berlangsung selama beberapa minggu hingga beberapa bulan di mana mahasiswa akan tinggal dan bekerja di lokasi yang ditetapkan, biasanya di daerah pedesaan atau terpencil.',
                'url' => '/kkn',
            ],
            [
                'title' => 'KP',
                'description' => 'KP adalah program di mana mahasiswa menjalani periode kerja di perusahaan atau organisasi sebagai bagian dari kurikulum mereka. Biasanya, Kerja Praktik dilakukan sebagai persyaratan untuk menyelesaikan gelar atau diploma di perguruan tinggi. Selama periode ini, mahasiswa akan menghabiskan waktu di tempat kerja, belajar dari praktisi di lapangan, dan menerapkan pengetahuan dan keterampilan yang mereka pelajari di kampus ke dalam situasi kerja sebenarnya.',
                'url' => '/kp',
            ],
        ];

        return view('beranda', ['data' => $data]);
    }
}
