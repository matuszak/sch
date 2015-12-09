<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Library\Editora;
use DB;
use Validator;


class editorasController extends Controller
{
    
    //Inicial
    public function getIndex()
    {   
        //LISTA TODOS AS COLEÇÕES E SÉRIES, CADASTRADOS OU MSG DE ERRO!
        $editoras = Editora::paginate(25);
        //view link interno;
        return view('library.editoras.index', compact('editoras'));   
    }
    
    //Método Adicionar, recebendo dados do formulário
    public function getAdd()
    {
        //view link interno;
        return view('library.editoras.forms');
    }

    //Método Adicionar, enviando ao formulário
    public function postAdd(Request $request)
    {
        $dadosForm = $request->all();
        //validação para adicionar novo
        $validator = Validator::make($dadosForm, Editora::$rules);
        if ($validator->fails()) {
            return redirect('biblioteca/editoras/add')
                        ->withErrors($validator)
                        ->withInput();
        }
        Editora::create($dadosForm);
        return redirect('biblioteca/editoras');
    }

    //Método Editar, recebendo informações
    public function getEd($acao, $id)
    {   
        $editora = Editora::find($id);
        //view link interno;
        return view('library.editoras.forms', compact('editora', 'acao'));
    }
    //Método Editar, postando informações
    public function postEd(Request $request, $id)
    {
         //validação para edicação
        $validator = Validator::make($request->all(), Editora::$rules);
        if ($validator->fails()) {
            return redirect('biblioteca/editoras/add')
                        ->withErrors($validator)
                        ->withInput();
        }
        $dadosForm = $request->except('_token');
        Editora::where('id', $id)->update($dadosForm);
        return redirect('biblioteca/editoras');
    }

    //Método para exibir dados que serão deletados, confirmação
    public function getRm($acao, $id)
    {   
        $editora = Editora::find($id);
        return view('library.editoras.forms', compact('editora', 'acao'));
    }
    //Método que deleta do banco a informação requerida
    public function postRm(Request $request)
    {   
        $idErase = $request->only('id');
       DB::table('editoras')->where('id', $idErase)->delete();
        return redirect('biblioteca/editoras');
    }
}
