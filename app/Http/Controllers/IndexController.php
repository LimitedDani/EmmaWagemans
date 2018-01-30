<?php

namespace App\Http\Controllers;

use App\index;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['create']);
    }

    public function create()
    {
        return view('layouts.index');
    }

    public function edit(index $index)
    {
        $indices = index::latest()->get();
        return view('layouts.edit', compact('indices'));
    }

    public function update(Request $request, index $index)
    {
        $this->validate(request(), [
            'title' => 'required|min:3',
            'subtitle' => 'required|min:3',
            'video1' => 'file',
            'video2' => 'file'
        ]);
        
        $index->update($request->all());

        return back();

    }
}
