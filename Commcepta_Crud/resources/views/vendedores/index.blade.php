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
        @endforeach
    </div>
@endsection
