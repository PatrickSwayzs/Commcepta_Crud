@extends('adminlte::page')
@section('content')
    <div class="container">
        <h1>Vendas</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Produto</th>
                <th>Vendedor</th>
                <th>Quantidade</th>
                <th>Valor</th>
            </tr>
            </thead>
            <tbody>
            @foreach($vendas as $ven)
                <tr>
                    <td> {{ $ven->produto->descricao }} </td>
                    <td> {{ $ven->vendedor->nome }} </td>
                    <td> {{ $ven->quantidade }} </td>
                    <td> {{ $ven->valor }} </td>
                    <td>
                        <!-- Botões para editar e excluir -->
                        <a href="{{ route('vendas.edit', ['id'=>$ven->id]) }}"
                           class="btn-sm btn-success"> Editar</a>
                        <a onclick="return confirm('Confirmar a Exclusão?')"
                           href="{{ route('vendas.destroy', ['id'=>$ven->id]) }}"
                           class="btn-sm btn-danger"> Remover</a>
                    </td>
            @endforeach
            </tbody>
        </table>
    </div>
    <br>
    <a href="{{ route('vendas.create') }}" class="btn btn-info">Novo</a>
@endsection
