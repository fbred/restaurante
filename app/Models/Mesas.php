<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Mesas extends Model
{
    protected $fillable = ['numero_mesa'];

    protected $table = 'mesas';

    public function pedidos(){
        return $this->hasMany(Pedidos::class,'mesa_id','id');
    }

    public function pedidoAberto(){
        //return DB::table('pedidos')->where('mesa_id','=',$this->id)->where('status','=',1);
        return $this->hasMany(Pedidos::class,'mesa_id','id')->where('status','=',1);
    }
}
