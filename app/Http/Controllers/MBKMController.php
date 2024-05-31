<?php

namespace App\Http\Controllers;

use App\Models\MBKM;
use Illuminate\Http\Request;

class MBKMController extends Controller {
    public function index(Request $request) {
        $keyword = $request->query("keyword");

        $mbkm = [];
        if ($keyword) {
            $mbkm = MBKM::where('nim', 'like', "%$keyword%")
                ->orWhere('nama', 'like', "%$keyword%")
                ->orWhere('status', 'like', "%$keyword%")
                ->orWhere('perusahaan', 'like', "%$keyword%")
                ->orWhere('alamat', 'like', "%$keyword%")
                ->orWhere('status_selesai', 'like', "%$keyword%")
                ->orWhere('rekognisi_sks', 'like', "%$keyword%")
                ->get();
        } else {
            $mbkm = MBKM::all();
        }

        return view(
            'v2.mbkm.index',
            [
                'mbkm' => $mbkm,
                'keyword' => $keyword,
            ]
        );
    }

    public function showCreate() {
        return view('v2.admin.create.mbkm');
    }

    public function showDelete() {
        $data = MBKM::all();
        return view(
            'v2.admin.delete.mbkm',
            ['data' => $data,]
        );
    }

    public function createMBKM(Request $request) {
        $mbkm = new MBKM();
        $mbkm->nim = $request->nim;
        $mbkm->nama = $request->nama;
        $mbkm->lokasi = $request->lokasi;
        $mbkm->kelompok = $request->kelompok;
        $mbkm->tema = $request->tema;
        $mbkm->dosen = $request->dosen;
        $mbkm->periode = $request->periode;
        $mbkm->catatan = $request->catatan;
        $mbkm->save();

        return back();
    }

    public function deleteMBKM($id) {
        $mbkm = MBKM::find($id);
        $mbkm->delete();
        return back();
    }
}
