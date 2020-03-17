<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //informamdp ao Model que ele ao nosso pode aceitar a
    // inserção de dados em massa para os campos apresentados em tela
    protected $fillable = ['descricao', 'categoria', 'preco'];

    //Funcão para informar que um Produto pode estar em mais de uma Venda
    public function vendasProduto(){
        return $this->hasMany('App\Venda');
    }
}
