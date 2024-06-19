<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CrudFasilitasHotel extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }
        $fasilitas = Fasilitas::all();

        return view("crud.fasilitas.index", ['fasilitas' => $fasilitas]);
    }
}
