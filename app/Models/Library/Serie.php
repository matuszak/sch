<?php

namespace App\Models\Library;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    //definindo campos protegidos da tabela de séries;
    protected $guarded = ['id'];
    static $rules = [
            'nome' => 'required|unique:series|min:3|max:30',
        ];

}
