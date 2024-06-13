<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
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
}
