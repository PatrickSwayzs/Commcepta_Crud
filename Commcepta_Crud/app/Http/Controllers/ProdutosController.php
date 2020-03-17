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

    //Método para redirecionar para a view com os formulários de criação
    public function create(){
        return view('produtos.create');
    }

    //Método para armazenar novo registro na base de dados
    public function store(ProdutoRequest $request){
        $novo_produto = $request->all();
        Produto::create($novo_produto);

        return redirect('produtos');
    }

    //Método para deletar registro
    public function destroy($id){
        Produto::find($id)->delete();
        return redirect('produtos');
    }
}
