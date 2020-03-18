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
          //try-catch para mostra notificação que o item não pode ser excluido se estiver vinculado a outro
        try {
            Vendedor::find($id)->delete();
            $ret = redirect()-> route('vendedores');

        } catch(\Illuminate\Database\QueryException $e) {
            session()->flash('not1','Este item está vinculado a outra tabela!
            Você não poderá exlui-lo até que ele esteja desvinculado!');
            $ret = redirect()->route('vendedores');
        }
        catch(\PDOException $e) {
            session()->flash('not2','Vish.. Deu PDOException!');
            $ret = redirect()->route('vendedores');
        }
        return $ret;
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
