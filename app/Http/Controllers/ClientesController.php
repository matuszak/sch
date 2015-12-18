<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Library\Cliente;
use DB;
use Validator;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex()
    {   
        $clientes = Cliente::paginate(25);
        return view('library.clientes.index', compact('clientes'));   
    }
    
//adicionar
    public function getAdd()
    {
        return view('library.clientes.forms');
    }

    public function postAdd(Request $request)
    {
        $dadosForm = $request->all();
        $validator = Validator::make($dadosForm, Cliente::$rules);
        if ($validator->fails()) {
            return redirect('biblioteca/clientes/add')
                        ->withErrors($validator)
                        ->withInput();
        }
        Cliente::create($dadosForm);
        return redirect('biblioteca/clientes');
    }

    
//editar
    public function getEd($acao, $id)
    {   
        $cliente = Cliente::find($id);
        return view('library.clientes.forms', compact('cliente', 'acao'));
    }
    public function postEd(Request $request, $id)
    {
        $validator = Validator::make($request->all(), Cliente::$rules);
        if ($validator->fails()) {
            return redirect("biblioteca/clientes/ed/u/$id")
                        ->withErrors($validator)
                        ->withInput();
        } 
            $dadosForm = $request->except('_token');
            Cliente::where('id', $id)->update($dadosForm);
      return redirect('biblioteca/clientes');
    }

 
//deleta
    public function getRm($acao, $id)
    {   
        $cliente = Cliente::find($id);
        return view('library.clientes.forms', compact('cliente', 'acao'));
    }
    public function postRm(Request $request)
    {   
        $idErase = $request->only('id');
        DB::table('clientes')->where('id', $idErase)->delete();
        return redirect('biblioteca/clientes');
    }
}
