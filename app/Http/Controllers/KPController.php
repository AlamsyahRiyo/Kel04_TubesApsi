<?php

namespace App\Http\Controllers;

use App\Models\KP;
use Illuminate\Http\Request;

class KPController extends Controller {
    public function index(Request $request) {
        $keyword = $request->query("keyword");

        $kp = [];
        if ($keyword) {
            $kp = KP::where('nim', 'like', "%$keyword%")
                ->orWhere('nama', 'like', "%$keyword%")
                ->orWhere('perusahaan', 'like', "%$keyword%")
                ->orWhere('bidang', 'like', "%$keyword%")
                ->orWhere('lokasi', 'like', "%$keyword%")
                ->orWhere('tanggal_masuk', 'like', "%$keyword%")
                ->orWhere('tanggal_keluar', 'like', "%$keyword%")
                ->orWhere('dosen_pembimbing', 'like', "%$keyword%")

                ->get();
        } else {
            $kp = KP::all();
        }

        return view(
            'v2.kp.index',
            [
                'kp' => $kp,
                'keyword' => $keyword,
            ]
        );
    }

    public function showCreate() {


        return view('v2.admin.create.kp');
    }

    public function showDelete() {
        $data = KP::all();
        return view('v2.admin.delete.kp', [
            'data' => $data,
        ]);
    }

    public function createKP(Request $request) {
        $kp = new KP();
        $kp->nim = $request->nim;
        $kp->nama = $request->nama;
        $kp->perusahaan = $request->perusahaan;
        $kp->bidang = $request->bidang;
        $kp->lokasi = $request->lokasi;
        $kp->tanggal_masuk = $request->tanggal_masuk;
        $kp->tanggal_keluar = $request->tanggal_keluar;
        $kp->dosen_pembimbing = $request->dosen_pembimbing;
        
        $kp->save();

        return back();
    }

    public function deleteKP($id) {
        $kp = KP::find($id);
        $kp->delete();
        return back();
    }
}
