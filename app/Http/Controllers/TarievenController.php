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

    public function edit()
    {
        return view('tarieven.edit');
    }

    public function show()
    {
        return view('tarieven.show');
    }
}
