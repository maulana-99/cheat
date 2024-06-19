<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CrudFasilitasHotel extends Controller
{
    public function index(){
        return view("crud.fasilitas.index");
    }
}
