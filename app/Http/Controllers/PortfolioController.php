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

    public function show()
    {
        $portfolios = portfolio::latest()->get();
        return view('portfolio.show', compact('portfolios'));
        
    }

    public function edit(portfolio $portfolio)
    {
        return view('portfolio.edit', compact('portfolio'));
    }

    public function patch($id, Request $request)
    {
        $this->validate(request(), [
            'title' => 'required|min:3',
            'subtitle' => 'required|min:3',
            'text' => 'required|min:3',
            'link' => 'required|min:3',
            'photo1' => 'image',
            'photo2' => 'image'
        ]);
    }
}
