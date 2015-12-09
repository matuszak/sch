@extends('layouts.master')

@section('content')

@include('includes.showErrors')

{{-- Formulário de DELETAR --}}
@if (isset($acao))
	@if($acao == "d")
	<div class="panel panel-default">
		<h1>BIBLIOTECA | EDITORA: EXCLUIR REGISTRO</h1>
		<p class="bg-danger">
			<b>O REGISTRO SERÁ EXCLUÍDO, DESEJA CONFIRMAR?</b>
		</p>
		<div class="panel-heading">
    		<h2 class="panel-title">EXCLUIR REGISTRO</h2>
  		</div>
		<div class="panel panel-default">
  			<div class="panel-body">
		{!! Form::open( ['url' => "biblioteca/editoras/rm/d/$editora->id", 'class'=>'form'] ) !!}
		{!! Form::hidden('id', $editora->id) !!}
	@endif
@endif

{{-- Formulário de EDITAR --}}
@if (isset($editora))
	@if($acao == "u")
	<div class="panel panel-default">
		<h1>BIBLIOTECA | EDITORA: EDITAR REGISTRO</h1>
		<div class="panel-heading">
    		<h2 class="panel-title">ALTERAÇÕES NO REGISTRO</h2>
  		</div>
		<div class="panel panel-default">
  			<div class="panel-body">
		{!! Form::open( ['url' => "biblioteca/editoras/ed/$editora->id", 'class'=>'form'] ) !!}
	@endif
@else
<div class="panel panel-default">
{{-- Formulário de ADICIONAR NOVO --}}
	<h1>BIBLIOTECA | EDITORA: ADICIONAR NOVO</h1>
	<div class="panel-heading">
    		<h2 class="panel-title">INCLUIR NOVO REGISTRO</h2>
  	</div>
	<div class="panel panel-default">
  		<div class="panel-body">
	{!! Form::open( ['url' => 'biblioteca/editoras/add', 'class'=>'form'] ) !!}
@endif

	{!! Form::label('Nome') !!}
	{!! Form::text('nome', isset($editora->nome) ? $editora->nome : null, ['class' => 'form-control form-group', 'placeholder' => '']) !!}
	
	{!! Form::label('Local') !!}
	{!! Form::text('local', isset($editora->local) ? $editora->local : null, ['class' => 'form-control form-group', 'placeholder' => '']) !!}
	
	{!! Form::submit('SALVAR', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}
		</div>
	</div>

@endsection