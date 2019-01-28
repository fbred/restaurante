<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    protected $fillable = ['cliente_id','mesa_id','status'];
    protected $table = 'pedidos';

//    public function cliente(){
//        return $this->belongsTo(Clientes::class);/*faz o relacionamento entre as tabelas*/
//    }

    public function mesa(){
        return $this->belongsTo(Mesas::class,'mesa_id','id');
    }

   public function itens(){
        return $this->hasMany(ItensPedido::class,'pedido_id','id');/*um*/
    }
}
