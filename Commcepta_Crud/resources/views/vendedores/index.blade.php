@extends('adminlte::page')
@section('content')
    @if(session()->has('not1'))
        <div  class="table table-striped table-bordered table-hover">
            <div class="alert alert-danger" style="width: 40%">
                <button type="button" class="close" aria-hidden="true"></button>
                <strong>Notificação:</strong> {{ session()->get('not1')}}
            </div>
        </div>
    @endif
    @if(session()->has('not2'))
        <div  class="table table-striped table-bordered table-hover">
            <div class="alert alert-danger" style="width: 40%">
                <button type="button" class="close" aria-hidden="true"></button>
                <strong>Notificação:</strong> {{ session()->get('not2')}}
            </div>
        </div>
    @endif

    <div class="container">
        <h1>Vendedores</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
            </tr>
            </thead>
            <tbody>
            @foreach($vendedores as $vend)
                <tr>
                    <td> {{ $vend->nome }} </td>
                    <td>
                        <!-- Botões para editar e excluir -->
                        <a href="{{ route('vendedores.edit', ['id'=>$vend->id]) }}"
                           class="btn-sm btn-success"> Editar</a>
                        <a onclick="return confirm('Confirmar a Exclusão?')"
                           href="{{ route('vendedores.destroy', ['id'=>$vend->id]) }}"
                           class="btn-sm btn-danger"> Remover</a>
                    </td>
            @endforeach
            </tbody>
        </table>
        {{ $vendedores->links() }}
    </div>
    <br>
    <a href="{{ route('vendedores.create') }}" class="btn btn-info">Novo</a>
@endsection
