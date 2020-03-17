<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use Illuminate\Http\Request;
use App\Produto;

class ProdutosController extends Controller
{
    public function index() {
        $produtos = Produto::all();
        return view('produtos.index', ['produtos' => $produtos]);
    }

    public function create(){
        return view('produtos.create');
    }

    public function store(ProdutoRequest $request){
        $novo_produto = $request->all();
        Produto::create($novo_produto);

        return redirect('produtos');
    }
}
