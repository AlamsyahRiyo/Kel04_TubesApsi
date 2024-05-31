<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dashboard;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // Mendapatkan query pencarian dari request
        $search = $request->input('search');

        // Jika ada query pencarian, filter data berdasarkan query tersebut
        if ($search) {
            $data = Dashboard::query()
                ->where('ID', 'LIKE', "%{$search}%")
                ->orWhere('NIM', 'LIKE', "%{$search}%")
                ->orWhere('Nama', 'LIKE', "%{$search}%")
                ->orWhere('Status', 'LIKE', "%{$search}%")
                ->orWhere('Perusahaan', 'LIKE', "%{$search}%")
                ->orWhere('Alamat', 'LIKE', "%{$search}%")
                ->orWhere('StatusSelesai', 'LIKE', "%{$search}%")
                ->orWhere('RekognisiSKS', 'LIKE', "%{$search}%")
                ->orWhere('TanggalSelesai', 'LIKE', "%{$search}%")
                ->get();
        } else {
            // Jika tidak ada query pencarian, ambil semua data
            $data = Dashboard::all();
        }

        // Mengirim data ke view
        return view('dashboard.index', compact('data'));
    }
}
