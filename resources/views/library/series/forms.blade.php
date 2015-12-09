@extends('layouts.master')

@section('content')

@include('includes.showErrors')

{{-- Formulário de DELETAR --}}
@if (isset($acao))
	@if($acao == "d")
		<h1><small>BIBLIOTECA</small> SÉRIE/COLEÇÃO > EXCLUIR</h1>
		<p class="bg-danger">
			<em>O REGISTRO SERÁ EXCLUÍDO, DESEJA CONFIRMAR?</em>
		</p>
		<hr>
		{!! Form::open( ['url' => "biblioteca/series/rm/d/$serie->id", 'class'=>'form'] ) !!}
		{!! Form::hidden('id', $serie->id) !!}
	@endif
@endif

{{-- Formulário de EDITAR --}}
@if (isset($serie))
	@if($acao == "u")
		<h1><small>BIBLIOTECA</small> SÉRIE/COLEÇÃO > EDITAR</h1>
		<hr>
		{!! Form::open( ['url' => "biblioteca/series/ed/$serie->id", 'class'=>'form'] ) !!}
	@endif
@else

{{-- Formulário de ADICIONAR NOVO --}}
	<h1><small>BIBLIOTECA</small> SÉRIE/COLEÇÃO > ADICIONAR NOVO</h1>
	<hr>
	{!! Form::open( ['url' => 'biblioteca/series/add', 'class'=>'form'] ) !!}
@endif
	{!! Form::label('Nome') !!}
	{!! Form::text('nome', isset($serie->nome) ? $serie->nome : null, ['class' => 'form-control form-group', 'placeholder' => 'Nova Série / Coleção']) !!}
	{!! Form::submit('SALVAR', ['class' => 'btn btn-success']) !!}
	{!! Form::close() !!}

@endsection