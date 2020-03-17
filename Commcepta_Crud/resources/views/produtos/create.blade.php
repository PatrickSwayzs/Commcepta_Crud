@extends('adminlte::page')
@section('content_header')
    <div class="container">
        <h1>Novo Produto</h1>
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
