<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ItensPedido extends Model
{
    protected $fillable = ['pedido_id','quantidade','descricao','preco'];
    protected $table = 'itens_pedido';

    public function pedido(){
        return $this->belongsTo(Pedidos::class,'pedido_id','id');
    }
}
