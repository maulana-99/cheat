<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use App\Models\Kamar;
use App\Models\Reservasi;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        $fasilitas = Fasilitas::all();
        $user = auth()->user();

        if ($user) {
            return view("dashboard", compact("user", "fasilitas"));
        } else {
            return view("dashboard", compact("fasilitas"));
        }
    }

    public function adminDashboard()
    {
        $totalKamar = Kamar::count();
        $totalReservasi = Reservasi::count();
        $totalFasilitas = Fasilitas::count();

        return view('admin.index', compact('totalKamar', 'totalReservasi', 'totalFasilitas'));
    }
}
