<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Reservasi;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class History extends Controller
{
    public function index()
    {
        $userId = Auth::id();
        $reservasi = Reservasi::where('user_id', $userId)
            ->join('kamars', 'reservasis.kamar_id', '=', 'kamars.id')
            ->select('reservasis.*', 'kamars.nama_kamar', 'kamars.tipe_kamar')
            ->get();
        return view('historyRes', compact('reservasi'));
    }

    public function generatePDF($id)
    {
        $reservasi = Reservasi::with('kamar')->find($id);
    
        if (!$reservasi) {
            abort(404);
        }
    
        $pdf = PDF::loadView('pdf.invoice', compact('reservasi'))
            ->setPaper('a5');
    
        return $pdf->download('invoice_' . $reservasi->id . '.pdf');
    }
}
