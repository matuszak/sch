@extends('layouts.master')

@section('content')

@include('includes.showErrors')

{{-- Formulário de DELETAR --}}
@if (isset($acao))
	@if($acao == "d")
	<div class="panel panel-default">
		<h1>BIBLIOTECA | SÉRIE/COLEÇÃO: EXCLUIR REGISTRO</h1>
		<p class="bg-danger">
			<b>O REGISTRO SERÁ EXCLUÍDO, DESEJA CONFIRMAR?</b>
		</p>
		<div class="panel-heading">
    		<h2 class="panel-title">EXCLUIR REGISTRO</h2>
  		</div>
		<div class="panel panel-default">
  			<div class="panel-body">
		{!! Form::open( ['url' => "biblioteca/series/rm/d/$serie->id", 'class'=>'form'] ) !!}
		{!! Form::hidden('id', $serie->id) !!}
	@endif
@endif

{{-- Formulário de EDITAR --}}
@if (isset($serie))
	@if($acao == "u")
	<div class="panel panel-default">
		<h1>BIBLIOTECA | SÉRIE/COLEÇÃO: EDITAR REGISTRO</h1>
		<div class="panel-heading">
    		<h2 class="panel-title">ALTERAÇÕES NO REGISTRO</h2>
  		</div>
		<div class="panel panel-default">
  			<div class="panel-body">
		{!! Form::open( ['url' => "biblioteca/series/ed/$serie->id", 'class'=>'form'] ) !!}
	@endif
@else
<div class="panel panel-default">
{{-- Formulário de ADICIONAR NOVO --}}
	<h1>BIBLIOTECA | SÉRIE/COLEÇÃO: ADICIONAR NOVO</h1>
	<div class="panel-heading">
    		<h2 class="panel-title">INCLUIR NOVO REGISTRO</h2>
  	</div>
	<div class="panel panel-default">
  		<div class="panel-body">
	{!! Form::open( ['url' => 'biblioteca/series/add', 'class'=>'form'] ) !!}
@endif
	{!! Form::label('Nome') !!}
	{!! Form::text('nome', isset($serie->nome) ? $serie->nome : null, ['class' => 'form-control form-group', 'placeholder' => 'Nova Série / Coleção']) !!}
	{!! Form::submit('SALVAR', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}
		</div>
	</div>
</div>
@endsection