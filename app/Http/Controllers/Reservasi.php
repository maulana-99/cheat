<?php

namespace App\Http\Controllers;

use App\Models\Kamar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class Reservasi extends Controller
{
    public function index()
    {
        // Query to group data
        $kamars = Kamar::all();

        // Return view with grouped data
        return view('reservasi.standard.index', ['kamars' => $kamars]);
    }

}
