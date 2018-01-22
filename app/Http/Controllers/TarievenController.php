<?php

namespace App\Http\Controllers;

use App\tarieven;
use Illuminate\Http\Request;

class TarievenController extends Controller
{
    public function create()
    {
        return view('tarieven.index');
    }
}
