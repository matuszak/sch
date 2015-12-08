@extends('layouts.master')

@section('content')

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
{{-- contagem de erros 
@if (count($errors) > 0)
	@foreach($errors->all() as $error)
		{{error}}
	@endforeach
@endif
--}}

@if (isset($acao))
	@if($acao == "d")
		<h1>Excluir</h1>
		{!! Form::open( ['url' => "biblioteca/generos/rm/d/$genero->id", 'class'=>'form' ] ) !!}
		{!! Form::hidden('id', $genero->id) !!}
	@endif
@endif

@if (isset($genero))
	@if($acao == "u")
		<h1>BIBLIOTECA > GÊNEROS > EDITAR</h1>
		{!! Form::open( ['url' => "biblioteca/generos/ed/$genero->id", 'class'=>'form'] ) !!}
	@endif
@else
	<h1>BIBLIOTECA > GÊNEROS > ADICIONAR NOVO</h1>
	{!! Form::open( ['url' => 'biblioteca/generos/add', 'class'=>'form'] ) !!}
@endif
	{!! Form::text('nome', isset($genero->nome) ? $genero->nome : null, ['class' => 'form-control form-group', 'placeholder' => 'NOVO GÊNERO']) !!}
	{!! Form::submit('SALVAR', ['class' => 'btn btn-success']) !!}
	{!! Form::close() !!}

@endsection