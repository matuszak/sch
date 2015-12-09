@extends('layouts.master')

@section('content')

@include('includes.showErrors')

{{-- Formulário de DELETAR --}}
@if (isset($acao))
	@if($acao == "d")
		<h1><small>BIBLIOTECA</small> GÊNERO > EXCLUIR</h1>
		<p class="bg-danger">
			<em>O REGISTRO SERÁ EXCLUÍDO, DESEJA CONFIRMAR?</em>
		</p>
		<hr>
		{!! Form::open( ['url' => "biblioteca/generos/rm/d/$genero->id", 'class'=>'form'] ) !!}
		{!! Form::hidden('id', $genero->id) !!}
	@endif
@endif

{{-- Formulário de EDITAR --}}
@if (isset($genero))
	@if($acao == "u")
		<h1><small>BIBLIOTECA</small> GÊNERO > EDITAR</h1>
		<hr>
		{!! Form::open( ['url' => "biblioteca/generos/ed/$genero->id", 'class'=>'form'] ) !!}
	@endif
@else

{{-- Formulário de ADICIONAR NOVO --}}
	<h1><small>BIBLIOTECA</small> GÊNERO > ADICIONAR NOVO</h1>
	<hr>
	{!! Form::open( ['url' => 'biblioteca/generos/add', 'class'=>'form'] ) !!}
@endif
	{!! Form::label('Nome') !!}
	{!! Form::text('nome', isset($genero->nome) ? $genero->nome : null, ['class' => 'form-control form-group', 'placeholder' => 'Novo Gênero']) !!}
	{!! Form::submit('SALVAR', ['class' => 'btn btn-success']) !!}
	{!! Form::close() !!}

@endsection