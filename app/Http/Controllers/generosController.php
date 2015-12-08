<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Library\Genero;
use DB;
use Validator;


class generosController extends Controller
{
    
    //Inicial
    public function getIndex()
    {   
        //LISTA TODOS OS GENEROS CADASTRADOS OU MSG DE ERRO!
        $generos = Genero::get();
        return view('library.generos.index', compact('generos', 'msgT'));   
    }
    
    //Método Adicionar, recebendo dados do formulário
    public function getAdd()
    {
        return view('library.generos.generos', compact('msgT1'));
    }
    
    //Método Adicionar, enviando ao formulário
    public function postAdd(Request $request)
    {
        $dadosForm = $request->all();
        //validação
        $validator = Validator::make($dadosForm, [
            'nome' => 'required|unique:generos|min:6|max:25',
        ]);

        if ($validator->fails()) {
            return redirect('biblioteca/generos/add')
                        ->withErrors($validator)
                        ->withInput();
        }

        Genero::create($dadosForm);
        return redirect('biblioteca/generos');
    }

    //Método Editar, recebendo informações
    public function getEd($acao, $id)
    {   
        $genero = Genero::find($id);
        return view('library.generos.generos', compact('genero', 'acao'));
    }
    //Método Editar, postando informações
    public function postEd(Request $request, $id)
    {
        $dadosForm = $request->except('_token');
        Genero::where('id', $id)->update($dadosForm);
        return redirect('biblioteca/generos');
    }

    //Método para exibir dados que serão deletados, confirmação
    public function getRm($acao, $id)
    {   
        $genero = Genero::find($id);
        return view('library.generos.generos', compact('genero', 'acao'));
    }
    //Método que deleta do banco a informação requerida
    public function postRm(Request $request)
    {   
        $idErase = $request->only('id');
       DB::table('generos')->where('id', $idErase)->delete();
        return redirect('biblioteca/generos');
    }
}
