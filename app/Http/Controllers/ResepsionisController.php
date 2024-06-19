<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ResepsionisController extends Controller
{
    public function index(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
    
        $query = Reservasi::join('kamars', 'reservasis.kamar_id', '=', 'kamars.id')
            ->select('reservasis.*', 'kamars.nama_kamar', 'kamars.tipe_kamar');
    
        if ($request->has('src-date')) {
            $date = $request->input('src-date');
            if (!empty($date)) {
                $query->whereDate('check_in', $date);
            }
        }
    
        if ($request->has('nama_lengkap')) {
            $namaLengkap = $request->input('nama_lengkap');
            if (!empty($namaLengkap)) {
                $query->where('nama_lengkap', 'like', '%' . $namaLengkap . '%');
            }
        }
        $reservasi = $query->get();
        return view('resepsionis.index', compact('reservasi'));
    }
    
    public function checkIn($id)
    {
        $reservasi = Reservasi::find($id); 
        if ($reservasi) {
            $reservasi->status = '2';
            $reservasi->save(); 
            return redirect()->back()->with('success', 'Check-in berhasil.');
        }

        return redirect()->back()->with('error', 'Reservasi tidak ditemukan.');
    }

    public function checkout($id)
    {
        $reservasi = Reservasi::find($id);
        if ($reservasi) {
            $reservasi->status = '0';
            $kamar = Kamar::where('id', $reservasi->kamar_id)->first();
            if ($kamar) {
                $kamar->quantity += $reservasi->quantity; 
                $kamar->save(); 
            }
            $reservasi->save();
        }
    
        return redirect()->back()->with('success', 'Check out berhasil!');
    }
}
