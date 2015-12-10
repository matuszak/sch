<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Library\Funcionario;
use DB;
use Validator;

class funcionariosController extends Controller
{
   
    public function getIndex()
    {
        $funcionarios = Funcionario::paginate(25);
        return view('library.funcionarios.index', compact('funcionarios'));
    }

    public function getAdd()
    {
        return view('library.funcionarios.forms');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
