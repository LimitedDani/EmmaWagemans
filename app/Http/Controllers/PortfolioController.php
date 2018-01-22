<?php

namespace App\Http\Controllers;

use App\portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function create()
    {
        return view('portfolio.index');
    }
}
