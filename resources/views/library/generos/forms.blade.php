@extends('layouts.master')
@section('content')
@include('includes.showErrors')
{{-- Formulário de DELETAR --}}
@if (isset($acao))
	@if($acao == "d")
<div class="panel panel-default">
		<h1>BIBLIOTECA | GÊNERO: EXCLUIR REGISTRO</h1>
		<p class="bg-danger">
			<b>O REGISTRO SERÁ EXCLUÍDO, DESEJA CONFIRMAR?</b>
		</p>
		<div class="panel-heading">
    		<h2 class="panel-title">EXCLUIR REGISTRO</h2>
  		</div>
		<div class="panel panel-default">
  			<div class="panel-body">
		{!! Form::open( ['url' => "biblioteca/generos/rm/d/$genero->id", 'class'=>'form'] ) !!}
		{!! Form::hidden('id', $genero->id) !!}
	@endif
@endif
{{-- Formulário de EDITAR --}}
@if (isset($genero))
	@if($acao == "u")<div class="panel panel-default">
		<h1>BIBLIOTECA | GÊNERO: EDITAR REGISTRO</h1>
		<div class="panel-heading">
    		<h2 class="panel-title">ALTERAÇÕES NO REGISTRO</h2>
  		</div>
		<div class="panel panel-default">
  			<div class="panel-body">
		{!! Form::open( ['url' => "biblioteca/generos/ed/$genero->id", 'class'=>'form'] ) !!}
	@endif
@else
{{-- Formulário de ADICIONAR NOVO --}}
<div class="panel panel-default">
{{-- Formulário de ADICIONAR NOVO --}}
	<h1>BIBLIOTECA | GÊNERO: ADICIONAR NOVO</h1>
	<div class="panel-heading">
    		<h2 class="panel-title">INCLUIR NOVO REGISTRO</h2>
  	</div>
	<div class="panel panel-default">
  		<div class="panel-body">
	{!! Form::open( ['url' => 'biblioteca/generos/add', 'class'=>'form'] ) !!}
@endif
	{!! Form::label('Nome') !!}
	{!! Form::text('nome', isset($genero->nome) ? $genero->nome : null, ['class' => 'form-control form-group', 'placeholder' => 'Novo Gênero']) !!}
	{!! Form::submit('SALVAR', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}
 </div>
</div>
</div>
@endsection