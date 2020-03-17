@extends('adminlte::page')
@section('content_header')
    <div class="container">
        <h1>Novo Vendedor</h1>
    </div>
@stop

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

        {!! Form::open(['url' => 'vendedores/store']) !!}

        <div class="form-group" style="width: 40%">
            {!! Form::label('nome', 'Nome: ') !!}
            {!! Form::text('nome', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar Vendedor', ['class'=>'btn btn-primary']) !!}
        </div>
    </div>

@stop
