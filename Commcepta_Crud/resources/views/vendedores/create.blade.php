@extends('adminlte::page')
@section('content_header')
    <div class="container">
        <h1>Novo Vendedor</h1>
    </div>
@stop

@section('content')
    <div class="container">

        {!! Form::open(['url' => 'vendedores/store']) !!}

        <div class="form-group" style="width: 40%">
            {!! Form::label('nome', 'Nome: ') !!}
            {!! Form::text('nome', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar Produto', ['class'=>'btn btn-primary']) !!}
        </div>
    </div>

@stop
