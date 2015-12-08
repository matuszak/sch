@extends('layouts.master')

@section('content')
@if (isset($acao))
	@if($acao == "d")
		<h1>EXCLUIR O GÊNERO</h1>
		{!! Form::open( ['url' => "biblioteca/generos/rm/d/$genero->id", 'class'=>'form'] ) !!}
	@endif
@endif

@if (isset($genero))
	@if($acao == "u")
		<h1>EDITAR GÊNERO</h1>
		{!! Form::open( ['url' => "biblioteca/generos/ed/$genero->id", 'class'=>'form'] ) !!}
	@endif
@else
	<h1>CADASTRAR GÊNERO</h1>
	{!! Form::open( ['url' => 'biblioteca/generos/add', 'class'=>'form'] ) !!}
@endif
	{!! Form::text('nome', isset($genero->nome) ? $genero->nome : null, ['class' => 'form-control form-group', 'placeholder' => 'NOVO GÊNERO']) !!}
	{!! Form::submit('SALVAR', ['class' => 'btn btn-success']) !!}
	{!! Form::close() !!}

@endsection