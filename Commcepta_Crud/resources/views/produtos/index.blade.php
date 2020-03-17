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
                    <td>
                        <!-- Botões para editar e excluir -->
                        <a href="{{ route('produtos.edit', ['id'=>$prod->id]) }}"
                           class="btn-sm btn-success"> Editar</a>
                        <a onclick="return confirm('Confirmar a Exclusão?')" href="{{ route('produtos.destroy', ['id'=>$prod->id]) }}"
                           class="btn-sm btn-danger"> Remover</a>
                    </td>
        @endforeach
    </div>
@endsection
