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
        return view('layouts.edit');
    }
}
