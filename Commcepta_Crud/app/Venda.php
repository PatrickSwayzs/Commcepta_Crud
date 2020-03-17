<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    //informamdp ao Model que ele ao nosso pode aceitar a
    // inserção de dados em massa para os campos apresentados em tela
    protected $fillable = ['produtos_id','vendedores_id','quantidade','valor'];

    // Função para retornar o Produto cadastrado em Venda
    public function produto(){
        return $this->belongsTo('App\Produto','produtos_id');
    }

    // Função para retornar o Vendedor cadastrado em Venda
    public function vendedor(){
        return $this->belongsTo('App\Vendedor','vendedores_id');
    }
}
