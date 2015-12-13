<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Library\Funcionario;
use DB;
use Validator;

class FuncionariosController extends Controller
{
  public function getIndex()
    {   
        $funcionarios = Funcionario::paginate(25);
        return view('library.funcionarios.index', compact('funcionarios'));   
    }
    
//adicionar
    public function getAdd()
    {
        return view('library.funcionarios.forms');
    }

    public function postAdd(Request $request)
    {
        $dadosForm = $request->all();
        $validator = Validator::make($dadosForm, Funcionario::$rules);
        if ($validator->fails()) {
            return redirect('biblioteca/funcionarios/add')
                        ->withErrors($validator)
                        ->withInput();
        }
        Funcionario::create($dadosForm);
        return redirect('biblioteca/funcionarios');
    }

    
//editar
    public function getEd($acao, $id)
    {   
        $funcionario = Funcionario::find($id);
        return view('library.funcionarios.forms', compact('funcionario', 'acao'));
    }
    public function postEd(Request $request, $id)
    {
        $validator = Validator::make($request->all(), Funcionario::$rules);
        if ($validator->fails()) {
            return redirect("biblioteca/funcionarios/ed/u/$id")
                        ->withErrors($validator)
                        ->withInput();
        } 
            $dadosForm = $request->except('_token');
            Funcionario::where('id', $id)->update($dadosForm);
      return redirect('biblioteca/funcionarios');
    }

 
//deleta
    public function getRm($acao, $id)
    {   
        $funcionario = Funcionario::find($id);
        return view('library.funcionarios.forms', compact('funcionario', 'acao'));
    }
    public function postRm(Request $request)
    {   
        $idErase = $request->only('id');
        DB::table('funcionarios')->where('id', $idErase)->delete();
        return redirect('biblioteca/funcionarios');
    }
}
