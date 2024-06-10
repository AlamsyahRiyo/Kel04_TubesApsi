<?php

namespace App\Http\Controllers;

use App\Models\KKN;
use Illuminate\Http\Request;

class KKNController extends Controller {
    public function index(Request $request) {
        $keyword = $request->query("keyword");

        $kkn = [];
        if ($keyword) {
            $kkn = KKN::where('nim', 'like', "%$keyword%")
                ->orWhere('nama', 'like', "%$keyword%")
                ->orWhere('lokasi', 'like', "%$keyword%")
                ->orWhere('kelompok', 'like', "%$keyword%")
                ->orWhere('tema', 'like', "%$keyword%")
                ->orWhere('dosen', 'like', "%$keyword%")
                ->orWhere('periode', 'like', "%$keyword%")
                ->get();
        } else {
            $kkn = KKN::all();
        }

        return view(
            'v2.kkn.index',
            [
                'kkn' => $kkn,
                'keyword' => $keyword,
            ]
        );
    }

    public function showCreate() {
        return view('v2.admin.create.kkn');
    }

    public function showDelete() {
        $data = KKN::all();
        return view('v2.admin.delete.kkn', ['data' => $data]);
    }

    public function createKKN(Request $request) {
        $kkn = new KKN();
        $kkn->nim = $request->nim;
        $kkn->nama = $request->nama;
        $kkn->lokasi = $request->lokasi;
        $kkn->kelompok = $request->kelompok;
        $kkn->tema = $request->tema;
        $kkn->dosen = $request->dosen;
        $kkn->periode = $request->periode;
        $kkn->save();

        return back();
    }

    public function deleteKKN($id) {
        $kkn = KKN::find($id);
        $kkn->delete();
        return back();
    }
}
