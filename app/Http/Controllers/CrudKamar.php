<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CrudKamar extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $kamar = Kamar::all();

        return view("crud.kamar.index", ['kamar' => $kamar]);
    }

    public function create()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        return view('crud.kamar.create');
    }

    public function store(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $request->validate([
            'nama_kamar' => 'required|unique:kamar',
            'tipe_kamar' => 'required|in:standard,superior,delux',
            'bed' => 'required|in:single,twin,double,king',
            'kapasitas' => 'required|in:1,2,3,4',
            'quantity' => 'required|integer',
            'deskripsi' => 'required',
        ]);

        $kamar = new Kamar();
        $kamar->nama_kamar = $request->nama_kamar;
        $kamar->tipe_kamar = $request->tipe_kamar;
        $kamar->bed = $request->bed;
        $kamar->kapasitas = $request->kapasitas;
        $kamar->quantity = $request->quantity;
        $kamar->deskripsi = $request->deskripsi;
        $kamar->save();

        return redirect()->route('kamar.index')->with('success', 'Kamar berhasil ditambahkan.');
    }

    public function edit($id)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $kamar = Kamar::findOrFail($id);

        return view('crud.kamar.update', ['kamar' => $kamar]);
    }

    public function update(Request $request, $id)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $request->validate([
            'nama_kamar' => 'required|unique:kamars,nama_kamar,' . $id,
            'tipe_kamar' => 'required|in:standard,superior,delux',
            'bed' => 'required|in:single,twin,double,king',
            'kapasitas' => 'required|in:1,2,3,4',
            'quantity' => 'required',
            'deskripsi' => 'required',
        ]);

        $kamar = Kamar::findOrFail($id);
        $kamar->nama_kamar = $request->nama_kamar;
        $kamar->tipe_kamar = $request->tipe_kamar;
        $kamar->bed = $request->bed;
        $kamar->kapasitas = $request->kapasitas;
        $kamar->quantity = $request->quantity;
        $kamar->deskripsi = $request->deskripsi;
        $kamar->save();

        return redirect()->route('kamar.index')->with('success', 'Kamar berhasil diperbarui.');
    }

    public function destroy($id)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        $kamar = Kamar::findOrFail($id);
        $kamar->delete();

        return redirect()->route('kamar.index')->with('success', 'Kamar berhasil dihapus.');
    }
}
