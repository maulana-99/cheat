<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        if ($user = auth()->user()) {
            return view("dashboard", compact("user"));
        }
        return view("dashboard");
    }
}
