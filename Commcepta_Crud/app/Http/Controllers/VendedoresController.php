<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VendedoresController extends Controller
{
      public function index() {
        $vendedores = Produto::all();
        return view('vendedores', ['vendedores' => $vendedores]);
    }
}
