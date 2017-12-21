<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {

        $this->validate(request(), [
            'name' => 'required|min:3',
            'email' => 'required|email',
            'text' => 'required|min:10'
        ]);

        $contact = Contact::create($request->all());
        return redirect('/');

    }
}
