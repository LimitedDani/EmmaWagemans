<?php

namespace App\Http\Controllers;

use App\diensten;
use Illuminate\Http\Request;

class DienstenController extends Controller
{
    public function create()
    {
        return view('diensten.index');
    }  
}
