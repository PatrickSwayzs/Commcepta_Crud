@extends('adminlte::page')
@section('content_header')
    <div class="container">
        <h1>Nova Venda</h1>
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

        {!! Form::open(['route' => 'vendas.store']) !!}

        <div class="form-group" style="width: 40%">
            {!! Form::label('produtos_id', 'Produto:') !!}
            {!! Form::select('produtos_id', \App\Produto::orderBy('descricao')->pluck('descricao', 'id')->toArray(), null, ['class'=>'form-control', 'require']) !!}
        </div>

        <div class="form-group" style="width: 40%">
            {!! Form::label('vendedores_id', 'Vendedor:') !!}
            {!! Form::select('vendedores_id', \App\Vendedor::orderBy('nome')->pluck('nome', 'id')->toArray(), null, ['class'=>'form-control', 'require']) !!}
        </div>

        <div class="form-group" style="width: 40%">
            {!! Form::label('quantidade', 'Quantidade: ') !!}
            {!! Form::number('quantidade', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group" style="width: 40%">
            {!! Form::label('valor', 'Valor: ') !!}
            {!! Form::number('valor', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar Venda', ['class'=>'btn btn-primary']) !!}
        </div>


    </div>
@endsection
