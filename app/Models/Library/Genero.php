<?php

namespace App\Models\Library;

use Illuminate\Database\Eloquent\Model;

class Genero extends Model
{
	//o nome guarded tem que ser usado dessa forma
	//essa váriavel só aceita esse nome;
   	protected $guarded = ['id'];
   	static $rules = [
   			'nome' => 'required|unique:generos|min:3|max:25',
   					];
}
