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

    public function edit()
    {
        $indices = index::latest()->get();
        return view('layouts.edit', compact('indices'));
    }

    public function patch(Request $request, $id)
    {
        $this->validate(request(), [
            'title' => 'required|min:3',
            'subtitle' => 'required|min:3',
            'video1' => 'file',
            'video2' => 'file'
        ]);

    }
}
