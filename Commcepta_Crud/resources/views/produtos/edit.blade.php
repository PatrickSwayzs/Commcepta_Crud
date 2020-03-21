@extends('adminlte::page')
@section('content_header')
    <div class="container">
        <h1>Editando Produto: {{ $produto->descricao }}</h1>
    </div>
@endsection

@section('content')
    <div class="container">

        @if($errors->any())
            <ul class="alert alert-danger" style="width: 40%">
                @foreach($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        @elseif(session()->has('success'))
            {{ session('success') }}
        @endif

        {!! Form::open(['route' => ["produtos.update", $produto->id], 'method'=>'put']) !!}

        <div class="form-group" style="width: 40%">
            {!! Form::label('descricao', 'Descrição: ') !!}
            {!! Form::text('descricao', $produto->descricao, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group" style="width: 40%">
            {!! Form::label('categoria', 'Categoria: ') !!}
            {!! Form::text('categoria', $produto->categoria, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group" style="width: 40%">
            {!! Form::label('preco', 'Preço: ') !!}
            {!! Form::text('preco', $produto->preco, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar Produto', ['class'=>'btn btn-primary']) !!}
        </div>


    </div>
@endsection
