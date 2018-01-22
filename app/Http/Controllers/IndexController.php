<?php

namespace App\Http\Controllers;

use App\index;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function create()
    {
        return view('layouts.index');
    }
}
