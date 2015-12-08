<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Library\Cliente;
use BD;


class clientesController extends Controller
{
    public function getIndex()
    //funcao que requer os dados do banco e faz listar no foreach;
    {
        $cli = Cliente::get();

        return view('library.clientes.index', compact('cli', 'cliente'));   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getNovo()
    {
        return view('library.clientes.clientes');
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
        $cliente = new cliente;
        $cliente->nome = $request->input('nome');
        $cliente->save();
        return redirect('biblioteca/clientes/novo');
        */
        $dadosForm = $request->all();
        Cliente::create($dadosForm);

        return redirect('biblioteca/clientes/add');
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