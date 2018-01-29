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

    public function show()
    {
        $dienstens = diensten::latest()->get();
        return view('diensten.show', compact('dienstens'));        
    }

    public function edit(diensten $diensten)
    {
        return view('diensten.edit', compact('diensten'));
    }

    public function patch($id, Request $request)
    {
        $this->validate(request(), [
            'title' => 'required|min:3',
            'text' => 'required|min:3',
            'link' => 'required|min:3',
            'photo' => 'image'
        ]);
    }
}
