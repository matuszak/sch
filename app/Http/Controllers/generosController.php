<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Library\Genero;
use BD;


class generosController extends Controller
{
    public function getIndex()
    {
        $gen = Genero::get();
        return view('library.generos.index', compact('gen', 'genero'));   
    }

    public function getAdd()
    {
        return view('library.generos.generos');
    }

    public function postAdd(Request $request)
    {
        $dadosForm = $request->all();
        Genero::create($dadosForm);
        return redirect('biblioteca/generos');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
