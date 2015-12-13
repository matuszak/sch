<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Library\Genero;
use DB;
use Validator;

class GenerosController extends Controller
{
    
    //Inicial
    public function getIndex()
    {   
        //LISTA TODOS OS GENEROS CADASTRADOS OU MSG DE ERRO!
        $generos = Genero::paginate(25);
        return view('library.generos.index', compact('generos'));   
    }
    

//incluir    
    public function getAdd()
    {
        return view('library.generos.forms');
    }

    public function postAdd(Request $request)
    {
        $dadosForm = $request->all();
        $validator = Validator::make($dadosForm, Genero::$rules);
        if ($validator->fails()) {
            return redirect('biblioteca/generos/add')
                        ->withErrors($validator)
                        ->withInput();
        }

        Genero::create($dadosForm);
        return redirect('biblioteca/generos');
    }


//editar
    public function getEd($acao, $id)
    {   
        $genero = Genero::find($id);
        return view('library.generos.forms', compact('genero', 'acao'));
    }

    public function postEd(Request $request, $id)
    {
        $validator = Validator::make($request->all(), Genero::$rules);
        if ($validator->fails()) {
            return redirect("biblioteca/generos/ed/u/$id")
                        ->withErrors($validator)
                        ->withInput();
        }
        $dadosForm = $request->except('_token');
        Genero::where('id', $id)->update($dadosForm);
        return redirect('biblioteca/generos');
    }

   
//deletar
    public function getRm($acao, $id)
    {   
        $genero = Genero::find($id);
        return view('library.generos.forms', compact('genero', 'acao'));
    }
    public function postRm(Request $request)
    {   
        $idErase = $request->only('id');
        DB::table('generos')->where('id', $idErase)->delete();
        return redirect('biblioteca/generos');
    }
}
