<?php

namespace App\Http\Controllers;

use App\portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['create']);
    }

    public function create()
    {
        return view('portfolio.index');
    }

    public function edit()
    {
        return view('portfolio.edit');
    }

    public function show()
    {
        return view('portfolio.show');
    }
}
