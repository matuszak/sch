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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getNovo()
    {
        return view('library.generos.generos');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postNovo(Request $request)
    {
        //dd = dump and die, do and die;   //dd($request->all());
        //método para se puxar dados especificos dos campos
        //metodo demorado...
        /*
        $genero = new Genero;
        $genero->nome = $request->input('nome');
        $genero->save();
        return redirect('biblioteca/generos/novo');
        */
        $dadosForm = $request->all();
        Genero::create($dadosForm);

        return redirect('biblioteca/generos/novo');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
