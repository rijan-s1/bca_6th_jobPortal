<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index()
    {
        return view('tags.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            $data => 'required|unique:tags,name|max:255',
        ]);
        dd($data);
    }

}
