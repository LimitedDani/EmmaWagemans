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
        $input = $request->all();
        if (!empty($request['video1'])) {
            $video = $request->file('video1');
            $path = public_path(). "/videos/";
            $filename = time() . '.' . $video->getClientOriginalExtension();
            $video->move($path, $filename);
            $input['video1'] = $filename;
        }
        if (!empty($request['video2'])) {
            $video1 = $request->file('video2');
            $path1 = public_path(). "/videos/";
            $filename1 = time() . '.' . $video1->getClientOriginalExtension();
            $video1->move($path1, $filename1);

            $input['video2'] = $filename1;
        }
        $index->update($input);

        return back();

    }
}
