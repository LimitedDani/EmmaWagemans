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

    public function update(Request $request, diensten $diensten)
    {
        $this->validate(request(), [
            'title' => 'required|min:3',
            'text' => 'required|min:3',
            'link' => 'required|min:3',
            'photo' => 'image'
        ]);
        $input = $request->all();

        if (!empty($request['photo'])) {
            $image = $request->file('photo');
            $path = public_path(). "/images/";
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move($path, $filename);

            $input['photo'] = $filename;
        }
        $diensten->update($input);
        return back();

    }
}
