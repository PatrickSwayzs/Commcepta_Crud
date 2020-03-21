@extends('adminlte::page')
@section('content')

    @if(session()->has('not1'))
        <div class="table table-striped table-bordered table-hover">
            <div class="alert alert-danger" style="width: 40%">
                <button type="button" class="close" aria-hidden="true"></button>
                <strong>Notificação:</strong> {{ session()->get('not1')}}
            </div>
        </div>
    @endif
    @if(session()->has('not2'))
        <div class="table table-striped table-bordered table-hover">
            <div class="alert alert-danger" style="width: 40%">
                <button type="button" class="close" aria-hidden="true"></button>
                <strong>Notificação:</strong> {{ session()->get('not2')}}
            </div>
        </div>
    @endif

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
                        <a onclick="return confirm('Confirmar a Exclusão?')"
                           href="{{ route('produtos.destroy', ['id'=>$prod->id]) }}"
                           class="btn-sm btn-danger"> Remover</a>
                    </td>
            @endforeach
            </tbody>
        </table>
        {{ $produtos->links() }}
    </div>
    <br>
    <a href="{{ route('produtos.create') }}" class="btn btn-info">Novo</a>
@endsection

