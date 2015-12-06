@extends('layouts.master')

@section('content')
	<h1>Cadastro de generos </h1>

	{!! Form::open( ['url' => 'biblioteca/generos/novo', 'class'=>'form'] ) !!}
	{!! Form::text('nome', null, ['class' => 'form-control form-group', 'placeholder' => 'NOVO GÊNERO']) !!}
	{!! Form::submit('SALVAR', ['class' => 'btn btn-success']) !!}
	{!! Form::close() !!}

@endsection