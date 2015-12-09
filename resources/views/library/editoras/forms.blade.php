@extends('layouts.master')

@section('content')
<br>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

{{-- Formulário de DELETAR --}}
@if (isset($acao))
	@if($acao == "d")
		<h1><small>BIBLIOTECA</small> EDITORAS > EXCLUIR</h1>
		<p class="bg-danger">
			<em>O REGISTRO SERÁ EXCLUÍDO, DESEJA CONFIRMAR?</em>
		</p>
		<hr>
		{!! Form::open( ['url' => "biblioteca/editoras/rm/d/$editora->id", 'class'=>'form'] ) !!}
		{!! Form::hidden('id', $editora->id) !!}
	@endif
@endif

{{-- Formulário de EDITAR --}}
@if (isset($editora))
	@if($acao == "u")
		<h1><small>BIBLIOTECA</small> EDITORAS > EDITAR</h1>
		<hr>
		{!! Form::open( ['url' => "biblioteca/editoras/ed/$editora->id", 'class'=>'form'] ) !!}
	@endif
@else

{{-- Formulário de ADICIONAR NOVO --}}
	<h1><small>BIBLIOTECA</small> EDITORAS > ADICIONAR NOVO</h1>
	<hr>
	{!! Form::open( ['url' => 'biblioteca/editoras/add', 'class'=>'form'] ) !!}
@endif
	{!! Form::text('nome', isset($editora->nome) ? $editora->nome : null, ['class' => 'form-control form-group', 'placeholder' => '']) !!}
	{!! Form::text('nome', isset($editora->local) ? $editora->local : null, ['class' => 'form-control form-group', 'placeholder' => '']) !!}
	{!! Form::submit('SALVAR', ['class' => 'btn btn-success']) !!}
	{!! Form::close() !!}

@endsection