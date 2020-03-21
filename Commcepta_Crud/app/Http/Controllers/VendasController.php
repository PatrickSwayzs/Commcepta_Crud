<?php

namespace App\Http\Controllers;

use App\Http\Requests\VendasRequest;
use App\Venda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VendasController extends Controller
{
    //Método que lista os itens da tabela 'vendas' e página a cada 5
    public function index()
    {
        $vendas = Venda::orderBy('id')->paginate(5);
        return view('vendas.index', ['vendas' => $vendas]);
    }

    //Método para redirecionar para a view com os formulários de criação
    public function create()
    {
        return view('vendas.create');
    }

    //Método para armazenar novo registro na base de dados
    public function store(VendasRequest $request)
    {
        $nova_venda = $request->all();
        Venda::create($nova_venda);

        return redirect()->route('vendas');
    }

    //Método para deletar registro
    public function destroy($id)
    {
        Venda::find($id)->delete();
        return redirect()->route('vendas');
    }

    //Método para buscar dados no BD e enviar para a rota de edição
    public function edit($id)
    {
        $venda = Venda::find($id);
        return view('vendas.edit', compact('venda'));
    }

    //Método para alterar os dados no BD
    public function update(VendasRequest $request, $id)
    {
        $venda = Venda::find($id)->update($request->all());
        return redirect()->route('vendas');
    }

    //Método para gerar relátorio de vendas baseado no valor (do menor para o maior)
    public function gerarPdf()
    {
        $vendas = Venda::orderBy('valor');
        $vendas = DB::table('vendas')
            ->join('produtos', 'vendas.produtos_id', '=', 'produtos.id')
            ->join('vendedors', 'vendas.vendedores_id', '=', 'vendedors.id')
            ->select('vendas.id', 'produtos.descricao', 'vendedors.nome', 'vendas.quantidade', 'vendas.valor')
            ->orderBy('vendas.valor')->get();
        $view = \View::make('vendas.relatorio', ['vendas' => $vendas]);
        $html = $view->render();
        $pdf = \PDF::loadHTML($html)->setPaper('a4', 'landscape')->setWarnings(false)->save('VendasRelatorio.pdf');

        return $pdf->download('VendasRelatorio.pdf');
    }
}
