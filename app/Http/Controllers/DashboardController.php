<?php

namespace App\Http\Controllers;

use App\Models\Laporan;
use App\Models\Kategori;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // Get Laporan Total Count
        $laporanTotal = Laporan::count();

        // Get Laporan count that is completed false
        $laporanDiproses = Laporan::where('completed', false)->count();

        // Get Laporan count that completed is true
        $laporanSelesai = Laporan::where('completed', true)->count();

        // Get the laporan completed average
        $averageDifference = Laporan::selectRaw('AVG(TIMESTAMPDIFF(SECOND, created_at, completed_at)/3600.0) as avg_diff_in_hours')
            ->get();

        $waktuPenyelesaian = round($averageDifference[0]->avg_diff_in_hours, 1);

        // Get all kategori, also add key 0 with value Lain-lain into last element
        $kategori = Kategori::all();
        $kategori->push((object) ['id' => 0, 'name' => 'Lain-lain']);




        return view('index', compact('laporanTotal', 'laporanDiproses', 'laporanSelesai', 'waktuPenyelesaian', 'kategori'));
    }
}
