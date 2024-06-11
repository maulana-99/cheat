<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Reservasi extends Controller
{
    public function roomStandard()
    {
        // Query to group data
        $kamars = Kamar::select('nama_kamar', 'tipe_kamar', 'bed', 'kapasitas', DB::raw('GROUP_CONCAT(nomor_kamar) as nomor_kamars'))
        ->where('status', '1')
        ->where('tipe_kamar', 'standard')
        ->groupBy('nama_kamar', 'tipe_kamar', 'bed', 'kapasitas')
        ->get();

        // Return view with grouped data
        return view('reservasi.standard.index', ['kamars' => $kamars]);
    }

    public function roomSuperior()
    {
        // Query to group data
        $kamars = Kamar::select('nama_kamar', 'tipe_kamar', 'bed', 'kapasitas', DB::raw('GROUP_CONCAT(nomor_kamar) as nomor_kamars'))
        ->where('status', '1')
        ->where('tipe_kamar', 'superior')
        ->groupBy('nama_kamar', 'tipe_kamar', 'bed', 'kapasitas')
        ->get();

        // Return view with grouped data
        return view('reservasi.superior.index', ['kamars' => $kamars]);
    }

    public function roomDelux()
    {
        // Query to group data
        $kamars = Kamar::select('nama_kamar', 'tipe_kamar', 'bed', 'kapasitas', DB::raw('GROUP_CONCAT(nomor_kamar) as nomor_kamars'))
        ->where('status', '1')
        ->where('tipe_kamar', 'delux')
        ->groupBy('nama_kamar', 'tipe_kamar', 'bed', 'kapasitas')
        ->get();

        // Return view with grouped data
        return view('reservasi.delux.index', ['kamars' => $kamars]);
    }
}
