@extends('adminlte::page')
@section('content')
    <div class="container">
        <h1>Produtos</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Preço</th>
            </tr>
            </thead>
            <tbody>
            @foreach($produtos as $prod)
                <tr>
                    <td> {{ $prod->descricao }} </td>
                    <td> {{ $prod->categoria }} </td>
                    <td> {{ $prod->preco }} </td>

        @endforeach
    </div>
@endsection
