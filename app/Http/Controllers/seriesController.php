<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Library\Serie;
use DB;
use Validator;


class SeriesController extends Controller
{
    
//Inicial
    public function getIndex()
    {   
        $series = Serie::paginate(25);
        return view('library.series.index', compact('series', 'fraseh1'));   
    }

    
//adicionar
    public function getAdd()
    {
        return view('library.series.forms');
    }

    public function postAdd(Request $request)
    {
        $dadosForm = $request->all();
        $validator = Validator::make($dadosForm, Serie::$rules);
        if ($validator->fails()) {
            return redirect('biblioteca/series/add')
                        ->withErrors($validator)
                        ->withInput();
        }
        Serie::create($dadosForm);
        return redirect('biblioteca/series');
    }

    
//editar
    public function getEd($acao, $id)
    {   
        $serie = Serie::find($id);
        return view('library.series.forms', compact('serie', 'acao'));
    }
    public function postEd(Request $request, $id)
    {
        $validator = Validator::make($request->all(), Serie::$rules);
        if ($validator->fails()) {
            return redirect("biblioteca/series/ed/u/$id")
                        ->withErrors($validator)
                        ->withInput();
        } 
            $dadosForm = $request->except('_token');
            Serie::where('id', $id)->update($dadosForm);
      return redirect('biblioteca/series');
    }

 
//deleta
    public function getRm($acao, $id)
    {   
        $serie = Serie::find($id);
        return view('library.series.forms', compact('serie', 'acao'));
    }
    public function postRm(Request $request)
    {   
        $idErase = $request->only('id');
        DB::table('series')->where('id', $idErase)->delete();
        return redirect('biblioteca/series');
    }
}
