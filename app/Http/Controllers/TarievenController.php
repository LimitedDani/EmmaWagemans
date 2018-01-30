<?php

namespace App\Http\Controllers;

use App\tarieven;
use Illuminate\Http\Request;

class TarievenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['create']);
    }

    public function create()
    {
        return view('tarieven.index');
    }

    public function show()
    {
        $tarievens = tarieven::latest()->get();
        return view('tarieven.show', compact('tarievens'));        
    }

    public function edit(tarieven $tarieven)
    {
        return view('tarieven.edit', compact('tarieven'));
    }

    public function update(Request $request, tarieven $tarieven)
    {
        $this->validate(request(), [
            'title' => 'required|min:3',
            'subtitle' => 'required|min:3',
            'price' => 'required|min:3',
            'photo' => 'file',
            'link' => 'required|min:3',
            'extra_info' => 'required|min:3'            
        ]);
        $input = $request->all();
        if (!empty($request['photo'])) {
            $image = $request->file('photo');
            $path = public_path(). "/images/";
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move($path, $filename);

            $input['photo'] = $filename;
        }
        $tarieven->update($input);
        return back();
    }

}
