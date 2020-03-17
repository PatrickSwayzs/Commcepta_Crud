@extends('adminlte::page')
@section('content_header')
    <div class="container">
        <h1>Editar Vendedor: {{ $vendedor->nome }}</h1>
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

        {!! Form::open(['route' => ["vendedores.update", $vendedor->id], 'method'=>'put']) !!}

        <div class="form-group" style="width: 40%">
            {!! Form::label('nome', 'Nome: ') !!}
            {!! Form::text('nome', $vendedor->nome, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar Vendedor', ['class'=>'btn btn-primary']) !!}
        </div>
    </div>

@stop
