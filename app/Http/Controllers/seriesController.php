<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Library\Serie;
use DB;
use Validator;


class seriesController extends Controller
{
    
    //Inicial
    public function getIndex()
    {   
        //LISTA TODOS AS COLEÇÕES E SÉRIES, CADASTRADOS OU MSG DE ERRO!
        $series = Serie::get();
        //view link interno;
        return view('library.series.index', compact('series'));   
    }
    
    //Método Adicionar, recebendo dados do formulário
    public function getAdd()
    {
        //view link interno;
        return view('library.series.seriesForms');
    }

    //Método Adicionar, enviando ao formulário
    public function postAdd(Request $request)
    {
        $dadosForm = $request->all();
        //validação para adicionar novo
        $validator = Validator::make($dadosForm, [
            'nome' => 'required|unique:series|min:3|max:25',
        ]);

        if ($validator->fails()) {
            return redirect('biblioteca/series/add')
                        ->withErrors($validator)
                        ->withInput();
        }

        Serie::create($dadosForm);
        return redirect('biblioteca/series');
    }

    //Método Editar, recebendo informações
    public function getEd($acao, $id)
    {   
        $series = Serie::find($id);
        //view link interno;
        return view('library.series.series', compact('series', 'acao'));
    }
    //Método Editar, postando informações
    public function postEd(Request $request, $id)
    {
         //validação para edicação
        $validator = Validator::make($request->all(), [
            'nome' => 'required|unique:series|min:3|max:25',
        ]);
        if ($validator->fails()) {
            return redirect('biblioteca/series/add')
                        ->withErrors($validator)
                        ->withInput();
        }
        $dadosForm = $request->except('_token');
        Serie::where('id', $id)->update($dadosForm);
        return redirect('biblioteca/series');
    }

    //Método para exibir dados que serão deletados, confirmação
    public function getRm($acao, $id)
    {   
        $serie = Serie::find($id);
        return view('library.series.seriesForms', compact('serie', 'acao'));
    }
    //Método que deleta do banco a informação requerida
    public function postRm(Request $request)
    {   
        $idErase = $request->only('id');
       DB::table('series')->where('id', $idErase)->delete();
        return redirect('biblioteca/series');
    }
}
