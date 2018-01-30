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

    public function update(Request $request, portfolio $portfolio)
    {
        $this->validate(request(), [
            'title' => 'required|min:3',
            'subtitle' => 'required|min:3',
            'text' => 'required|min:3',
            'link' => 'required|min:3',
            'photo1' => 'image',
            'photo2' => 'image'
        ]);
        $input = $request->all();
        if (!empty($request['photo1'])) {
            $image = $request->file('photo1');
            $path = public_path(). "/images/";
            $filename = time() . '.' . $image->getClientOriginalExtension();
            $image->move($path, $filename);

            $input['photo1'] = $filename;
        }
        if (!empty($request['photo2'])) {
            $image1 = $request->file('photo2');
            $path1 = public_path(). "/images/";
            $filename1 = time() . '.' . $image1->getClientOriginalExtension();
            $image1->move($path1, $filename1);

            $input['photo2'] = $filename1;
        }
        $portfolio->update($input);
        return back();

    }
}
