<?php

namespace App\Http\Controllers;

use App\Makul;
use Illuminate\Http\Request;

class MakulController extends Controller
{
    public function index()
    {
        $makul = Makul::all();
        return view('makul.index', compact('makul'));
    }

    public function create()
    {
        return view('makul.create');
    }

    public function store(request $request)
    {
        Makul::create($request->all());
        return redirect()->route('makul');
    }

   public function edit($id)
   {
        $makul = Makul::find($id);
        return view('makul.edit', compact('makul'));
   }
}
