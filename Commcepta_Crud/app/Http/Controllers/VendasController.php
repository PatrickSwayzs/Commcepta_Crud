<?php

namespace App\Http\Controllers;

use App\Http\Requests\VendasRequest;
use App\Venda;
use Illuminate\Http\Request;

class VendasController extends Controller
{
    public function index() {
        $vendas = Venda::all();
        return view('vendas.index', ['vendas' => $vendas]);
    }

    //Método para redirecionar para a view com os formulários de criação
    public function create(){
        return view('vendas.create');
    }

    //Método para armazenar novo registro na base de dados
    public function store(VendasRequest $request){
        $nova_venda = $request->all();
        Venda::create($nova_venda);

        return redirect()->route('vendas');
    }

    //Método para deletar registro
    public function destroy($id){
        Venda::find($id)->delete();
        return redirect()->route('vendas');
    }

    //Método para buscar dados no BD e enviar para a rota de edição
    public function edit($id){
        $venda = Venda::find($id);
        return view('vendas.edit', compact('venda'));
    }

    //Método para alterar os dados no BD
    public function update(VendasRequest $request, $id){
        $venda = Venda::find($id)->update($request->all());
        return redirect()->route('vendas');
    }
}
