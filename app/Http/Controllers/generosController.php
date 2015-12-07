<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Library\Genero;
use BD;


class generosController extends Controller
{
    
    //Inicial
    public function getIndex()
    {
        $gen = Genero::get();
        return view('library.generos.index', compact('gen', 'genero'));   
    }
    
    //Método Adicionar, recebendo dados do formulário
    public function getAdd()
    {
        return view('library.generos.generos');
    }
    
    //Método Adicionar, enviando ao formulário
    public function postAdd(Request $request)
    {
        $dadosForm = $request->all();
        Genero::create($dadosForm);

        return redirect('biblioteca/generos');
    }

    //Método Editar, recebendo informações
    public function getEdit($id)
    {
        $genero = Genero::find($id);
        return view('library.generos.generos', compact('genero'));

    }
    //Método Editar, postando informações
    public function postEdit(Request $request, $id)

    {
        $dadosForm = $request->except('_token');
        Genero::where('id', $id)->update($dadosForm);
        return redirect('biblioteca/generos');
    
    }

    
    public function getDel($id, $acao)
    {  $genero = Genero::find($id);
        
        return view('library.generos.generos', compact('genero', 'acao'));
    }
}
