<?php

namespace App\Http\Controllers;

use App\Vendedor;
use Illuminate\Http\Request;

class VendedoresController extends Controller
{
      public function index() {
        $vendedores = Vendedor::all();
        return view('vendedores.index', ['vendedores' => $vendedores]);
    }

    public function create(){
        return view('vendedores.create');
    }

    public function store(Request $request){
        $novo_vendedor = $request->all();
        Vendedor::create($novo_vendedor);

        return redirect('vendedores');
    }
}
