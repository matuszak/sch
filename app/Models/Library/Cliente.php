<?php

namespace App\Models\Library;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //usar guarded
    protected $guarded = ['id'];
     static $rules = [
    	'nome' => 'required|max:80',
    	
    	'dataNascimento' => 'required',
    	
    	'cpf' => 'required|unique:clientes',
    	'endereco' => 'required',
    	'fone' => 'required',
    	'tipo' => 'required',
    ];
}
