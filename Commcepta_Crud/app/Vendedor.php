<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendedor extends Model
{
    //informamdp ao Model que ele ao nosso pode aceitar a
    // inserção de dados em massa para os campos apresentados em tela
    protected $fillable = ['nome'];

    //Funcão para informar que um Vendedor pode estar em mais de uma Venda
    public function vendasVendedor(){
        return $this->hasMany('App\Venda');
    }
}
