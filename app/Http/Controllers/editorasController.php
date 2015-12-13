<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Library\Editora;
use DB;
use Validator;


class EditorasController extends Controller
{
    
    //Inicial
    public function getIndex()
    {   
        $editoras = Editora::paginate(25);
        return view('library.editoras.index', compact('editoras'));   
    }
    

    //Método Adicionar, recebendo dados do formulário
    public function getAdd()
    {
        return view('library.editoras.forms');
    }

    public function postAdd(Request $request)
    {
        $dadosForm = $request->all();
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
        return view('library.editoras.forms', compact('editora', 'acao'));
    }

    public function postEd(Request $request, $id)
    {
        $validator = Validator::make($request->all(), Editora::$rules);
        if ($validator->fails()) {
            return redirect("biblioteca/editoras/ed/u/$id")
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

    public function postRm(Request $request)
    {   
        $idErase = $request->only('id');
        DB::table('editoras')->where('id', $idErase)->delete();
        return redirect('biblioteca/editoras');
    }
}
