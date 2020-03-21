<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProdutoRequest;
use Illuminate\Http\Request;
use App\Produto;

class ProdutosController extends Controller
{
    public function index()
    {
        $produtos = Produto::orderBy('descricao')->paginate(5);
        return view('produtos.index', ['produtos' => $produtos]);
    }

    //Método para redirecionar para a view com os formulários de criação
    public function create()
    {
        return view('produtos.create');
    }

    //Método para armazenar novo registro na base de dados
    public function store(ProdutoRequest $request)
    {
        $novo_produto = $request->all();
        Produto::create($novo_produto);

        return redirect()->route('produtos');
    }

    //Método para deletar registro
    public function destroy($id)
    {
        //try-catch para mostra notificação que o item não pode ser excluido se estiver vinculado a outro
        try {
            Produto::find($id)->delete();
            $ret = redirect()->route('produtos');

        } catch (\Illuminate\Database\QueryException $e) {
            session()->flash('not1', 'Este item está vinculado a outra tabela!
            Você não poderá exlui-lo até que ele esteja desvinculado!');
            $ret = redirect()->route('produtos');
        } catch (\PDOException $e) {
            session()->flash('not2', 'Vish.. Deu PDOException!');
            $ret = redirect()->route('produtos');
        }
        return $ret;
    }

    //Método para buscar dados no BD e enviar para a rota de edição
    public function edit($id)
    {
        $produto = Produto::find($id);
        return view('produtos.edit', compact('produto'));
    }

    //Método para alterar os dados no BD
    public function update(ProdutoRequest $request, $id)
    {
        $produto = Produto::find($id)->update($request->all());
        return redirect()->route('produtos');
    }
}
