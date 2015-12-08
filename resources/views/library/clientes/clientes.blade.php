@extends('layouts.master')

@section('content')
	<h1>Cadastro de clientes </h1>

	{!! Form::open( ['url' => 'biblioteca/clientes/novo', 'class'=>'form'] ) !!}
	{!! Form::text('nome', null, ['class' => 'form-control form-group', 'placeholder' => 'NOME']) !!}
	{!! Form::text('cpf', null, ['class' => 'form-control form-group', 'placeholder' => 'CPF']) !!}
	{!! Form::date('dataNascimento', null, ['class' => 'form-control form-group', 'placeholder' => 'DATA NASCIMENTO']) !!}
	{!! Form::text('fone', null, ['class' => 'form-control form-group', 'placeholder' => 'TELEFONE']) !!}
	{!! Form::text('sexo', null, ['class' => 'form-control form-group', 'placeholder' => 'SEXO M ou F']) !!}
	{!! Form::text('endereco', null, ['class' => 'form-control form-group', 'placeholder' => 'ENDEREÇO']) !!}
	{!! Form::text('email', null, ['class' => 'form-control form-group', 'placeholder' => 'E-MAIL']) !!}
	{!! Form::text('tipo', null, ['class' => 'form-control form-group', 'placeholder' => 'TIPO/CATEGORIA']) !!}
	{!! Form::submit('SALVAR', ['class' => 'btn btn-success']) !!}
	{!! Form::close() !!}

@endsection