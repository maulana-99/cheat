<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function showBookingForm($id)
    {
        $kamar = Kamar::where('id', $id)->first();
        if (!$kamar) {
            return redirect()->route('reservasi.standard.index')->with('error', 'Room not found.');
        }
        return view('reservasi.book', ['kamar' => $kamar]);
    }

    public function submitBooking(Request $request)
    {
        // Validate and process the booking form
        $request->validate([
            'nama_lengkap' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'no_tlp' => 'required|string|max:15',
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
            'jumlah_kamar' => 'required|integer|min:1',
            'kamar_id' => 'required|exists:kamar,id',
        ]);

        // Process the booking logic here

        return redirect()->route('reservasi.standard.index')->with('success', 'Booking successful.');
    }
}
