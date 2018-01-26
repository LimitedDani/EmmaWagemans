<?php

namespace App\Http\Controllers;

use App\diensten;
use Illuminate\Http\Request;

class DienstenController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['create']);
    }

    public function create()
    {
        return view('diensten.index');
    }
    
    public function edit()
    {
        return view('diensten.edit');
    }
}
