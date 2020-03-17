@extends('adminlte::page')
@section('content')
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
                        <a onclick="return confirm('Confirmar a Exclusão?')" href="{{ route('vendedores.destroy', ['id'=>$vend->id]) }}"
                           class="btn-sm btn-danger"> Remover</a>
                    </td>
        @endforeach
    </div>
@endsection
