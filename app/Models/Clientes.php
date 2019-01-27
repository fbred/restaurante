<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    protected $fillable = ['nome','endereco','data_nascimento', 'sexo', 'telefone'];

    protected $table = ['clientes'];
}
