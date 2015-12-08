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
<<<<<<< HEAD
    //funcao que requer os dados do banco e faz listar no foreach;
    {
        $gen = Genero::get();

        return view('library.generos.index', compact('gen', 'genero'));   
=======
    {   
        //Variavel que recebe o título da pagina e do <h1>;
        $msgT = 'LISTAGEM DOS GÊNEROS:';
        $generos = Genero::get();
        return view('library.generos.index', compact('generos', 'msgT'));   
>>>>>>> b58499b7136452c10acc0682d959dd15708f76c5
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

    public function getRm($acao, $id)
    {   
        $msgD = "Deletando!";
        $genero = Genero::find($id);
        return view('library.generos.generos', compact('genero', 'acao'));
    }
}
