@extends('layouts.master')

<?php $tituloPg = "BIBLIOTECA - Gêneros"; ?>

@section('content')
@include('includes.showErrors')
@if (isset($acao))

	@if($acao == "d")
		<div class="container-fluid">
			<div class="page-header">
				<h1>{!! $tituloPg !!}</h1>
				<p class="bg-danger"><b>O REGISTRO SERÁ EXCLUÍDO, DESEJA CONFIRMAR?</b></p>
			</div>
			<br>
			<div class="panel panel-default">
				<div class='panel panel-header'>
					<h1 class="panel-title"><b>Excluir registro selecionado</b></h1>
				</div>
					<div class="panel-body"> 
						{!! Form::open( ['url' => "biblioteca/generos/rm/d/$genero->id", 'class'=>'form'] ) !!}
						{!! Form::hidden('id', $genero->id) !!}
	@endif

@endif

@if (isset($genero))

	@if($acao == "u")
			<div class="container-fluid">
				<div class="page-header">
					<h1>{!! $tituloPg !!}</h1>
				</div>
			<br>
			<div class="panel panel-default">
				<div class='panel panel-header'>
					<h1 class="panel-title"><b>Editar registro selecionado</b></h1>
				</div>
					<div class="panel-body">
						{!! Form::open( ['url' => "biblioteca/generos/ed/$genero->id", 'class'=>'form'] ) !!}

	@endif

@else
			<div class="container-fluid">
				<div class="page-header">
					<h1>{!! $tituloPg !!}</h1>
				</div>
			<br>
			<div class="panel panel-default">
				<div class='panel panel-header'>
					<h1 class="panel-title"><b>Incluir novo registro</b></h1>
				</div>
					<div class="panel-body">		
						{!! Form::open( ['url' => 'biblioteca/generos/add', 'class'=>'form'] ) !!}

@endif
					
						{!! Form::label('Nome') !!}
						{!! Form::text('nome', isset($genero->nome) ? $genero->nome : null, ['class' => 'form-control form-group', 'placeholder' => 'Nome', 'required' => '""']) !!}
						{!! Form::submit('SALVAR', ['class' => 'btn btn-primary']) !!}
					</div>
						{!! Form::close() !!}
			</div>
		</div>	
@endsection