@extends('layouts.master')

<?php $tituloPg = "BIBLIOTECA - Editoras"; ?>

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
						{!! Form::open( ['url' => "biblioteca/editoras/rm/d/$editora->id", 'class'=>'form'] ) !!}
						{!! Form::hidden('id', $editora->id) !!}
	@endif

@endif

@if (isset($editora))

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
						{!! Form::open( ['url' => "biblioteca/editoras/ed/$editora->id", 'class'=>'form'] ) !!}

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
						{!! Form::open( ['url' => 'biblioteca/editoras/add', 'class'=>'form'] ) !!}
@endif
						{!! Form::label('Nome') !!}
						{!! Form::text('nome', isset($editora->nome) ? $editora->nome : null, ['class' => 'form-control form-group', 'placeholder' => 'Nome', 'required' => '""']) !!}
						
						{!! Form::label('Local') !!}
						{!! Form::text('local', isset($editora->local) ? $editora->local : null, ['class' => 'form-control form-group', 'placeholder' => 'Local', 'required' => '""']) !!}
						
						{!! Form::submit('SALVAR', ['class' => 'btn btn-default']) !!}
					</div>
						{!! Form::close() !!}
			</div>
		</div>	
@endsection