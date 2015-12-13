<?php

namespace App\Models\Library;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $guarded = ["id"];
    static $rules = [
    	'nome' => 'required|max:10',
    	'sobreNome' => 'required|max:10',
    	'dataNascimento' => 'required',
    	'rg' => 'required',
    	'cpf' => 'required',
    	'endereco' => 'required',
    	'foneGeral' => 'required',
    	'cargo' => 'required',
    ];
}
