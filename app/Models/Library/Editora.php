<?php

namespace App\Models\Library;

use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    protected $guarded = ['id'];
    static $rules = [
            'nome' => 'required|min:3|max:40',
            'local' => 'required|min:3|max:50',
        ];
}
