<?php

namespace App\Http\Controllers;

use App\Http\Requests\VendedorRequest;
use App\Vendedor;
use Illuminate\Http\Request;

class VendedoresController extends Controller
{
      public function index() {
        $vendedores = Vendedor::all();
        return view('vendedores.index', ['vendedores' => $vendedores]);
    }

    //Método para redirecionar para a view com os formulários de criação
    public function create(){
        return view('vendedores.create');
    }

    //Método para armazenar novo registro na base de dados
    public function store(VendedorRequest $request){
        $novo_vendedor = $request->all();
        Vendedor::create($novo_vendedor);

        return redirect()->route('vendedores');
    }

    //Método para deletar registro
    public function destroy($id){
          Vendedor::find($id)->delete();
        return redirect()->route('vendedores');
    }

    //Método para buscar dados no BD e enviar para a rota de edição
    public function edit($id){
        $vendedor = Vendedor::find($id);
        return view('vendedores.edit', compact('vendedor'));
    }

    //Método para alterar os dados no BD
    public function update(VendedorRequest $request, $id){
        $vendedor = Vendedor::find($id)->update($request->all());
        return redirect()->route('vendedores');
    }
}
