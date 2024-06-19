<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use App\Models\Reservasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ReservasiController extends Controller
{
    public function index()
    {
        $kamars = Kamar::all();

        return view('reservasi.index', ['kamars' => $kamars]);
    }

    public function showBookingForm($id)
    {
        $kamar = Kamar::findOrFail($id);
        return view('reservasi.reservasi', compact('kamar'));
    }

    public function storeBooking(Request $request)
    {
        $validated = $request->validate(
            [
                'user_id' => 'required|exists:users,id',
                'kamar_id' => 'required|exists:kamars,id',
                'nama_lengkap' => 'required|string|max:255',
                'no_tlp' => 'required|string|max:15',
                'alamat' => 'required|string|max:255',
                'quantity' => 'required|integer|min:1',
                'check_in' => 'required|date|after_or_equal:today',
                'check_out' => 'required|date|after:check_in',
            ],
            [
                'quantity.required' => 'quantity minimal 1',
                'check_in.after_or_equal' => 'Tanggal check-in tidak boleh sebelum hari ini.',
                'check_out.after' => 'Tanggal check-out harus setelah tanggal check-in.',
            ],
        );

        $kamar = Kamar::findOrFail($validated['kamar_id']);

        if ($validated['quantity'] > $kamar->quantity) {
            return back()->withErrors(['quantity' => 'Kuantitas melebihi kamar yang tersedia.']);
        }

        Reservasi::create($validated);

        $kamar->quantity -= $validated['quantity'];
        $kamar->save();

        return redirect()->route('history.index')->with('success', 'Booking berhasil dibuat.');
    }
}
