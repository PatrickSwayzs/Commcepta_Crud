@extends('adminlte::page')
@section('content_header')
    <div class="container">
        <h1>Novo Produto</h1>
    </div>
@endsection

@section('content')
    <div class="container">

        {!! Form::open(['url' => 'produtos/store']) !!}

        <div class="form-group" style="width: 40%">
            {!! Form::label('descricao', 'Descrição: ') !!}
            {!! Form::text('descricao', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group" style="width: 40%">
            {!! Form::label('categoria', 'Categoria: ') !!}
            {!! Form::text('categoria', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group" style="width: 40%">
            {!! Form::label('preco', 'Preço: ') !!}
            {!! Form::number('preco', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar Produto', ['class'=>'btn btn-primary']) !!}
        </div>



    </div>
@endsection
