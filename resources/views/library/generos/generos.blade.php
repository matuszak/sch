@extends('layouts.master')

@section('content')
@if (isset($acao)<1)
	<h1>APAGAR GÊNERO</h1>
	Sera apagado o gênero: {{$genero->id}} com ação: {{$acao}}
	{!! Form::open( ['url' => "biblioteca/generos/del/$genero->id", 'class'=>'form'] ) !!}
@endif
	
@if (isset($genero))
	<h1>EDITAR GÊNERO</h1>
	Exibindo o gênero: {{$genero->id}}
	{!! Form::open( ['url' => "biblioteca/generos/edit/$genero->id", 'class'=>'form'] ) !!}
@else
	<h1>CADASTRAR GÊNERO</h1>
	{!! Form::open( ['url' => 'biblioteca/generos/add', 'class'=>'form'] ) !!}
@endif
	{!! Form::text('nome', isset($genero->nome) ? $genero->nome : null, ['class' => 'form-control form-group', 'placeholder' => 'NOVO GÊNERO']) !!}
	{!! Form::submit('SALVAR', ['class' => 'btn btn-success']) !!}
	{!! Form::close() !!}
@endsection