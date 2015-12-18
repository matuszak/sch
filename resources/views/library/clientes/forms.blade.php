@extends('layouts.master')

<?php $tituloPg = "BIBLIOTECA - Clientes"; ?>

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
						{!! Form::open( ['url' => "biblioteca/clientes/rm/d/$cliente->id", 'class'=>'form'] ) !!}
						{!! Form::hidden('id', $cliente->id) !!}
	@endif

@endif

@if (isset($cliente))

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
						{!! Form::open( ['url' => "biblioteca/clientes/ed/$cliente->id", 'class'=>'form'] ) !!}

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
						{!! Form::open( ['url' => 'biblioteca/clientes/add', 'class'=>'form'] ) !!}
@endif

					<fieldset>
					<div class="container-fluid">
					<!-- Form Name -->
					<legend>Dados pessoais</legend>

					<!-- Text input-->

					<div class="form-group">
					  <label class="col-md-4 control-label" for="nome">Nome</label>  
					  <div class="">
					  {!! Form::text('nome', isset($cliente->nome) ? $cliente->nome : null, ['class' => 'form-control input-md', 'placeholder' => 'Nome']) !!}
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="sobreNome">Sobre nome</label>  
					  <div class="">
					  {!! Form::text('sobreNome', isset($cliente->sobreNome) ? $cliente->sobreNome : null, ['class' => 'form-control input-md', 'placeholder' => 'Sobre nome']) !!}
						    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="dataNascimento">Data Nascimento</label>  
					  <div class="">
					  {!! Form::text('dataNascimento', isset($cliente->dataNascimento) ? $cliente->dataNascimento : null, ['class' => 'form-control input-md', 'placeholder' => 'ex: dd/mm/aaaa']) !!}
					    
					  </div>
					</div>

					<!-- Multiple Radios -->

					<div class="form-group">
					  <label class="col-md-2 control-label" for="sexo">Genero</label>
					  <div class="col-md-10 ">

					  <div class="radio">
					    <label for="sexo-0">
					    {!! Form::radio('sexo', 'F') !!}	Feminino
					    </label>
						</div>
					  <div class="radio">
					    <label for="sexo-1">
					      {!! Form::radio('sexo', 'M', 	true) !!}		Masculino
					    </label>
						</div>
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="cpf">CPF</label>  
					  <div class="">
					  {!! Form::text('cpf', isset($cliente->cpf) ? $cliente->cpf : null, ['class' => 'form-control input-md', 'placeholder' => 'ex: 111222333-44']) !!}
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="rg">Registro Geral</label>  
					  <div class="">					  
					  {!! Form::text('rg', isset($cliente->rg) ? $cliente->rg : null, ['class' => 'form-control input-md', 'placeholder' => 'ex: 000001234']) !!}
					    
					  </div>
					</div>

					<!-- Select Basic -->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="cargo">Cargo</label>
					  <div class="">
					  {!! Form::select('cargo', ['' => 'Selecione', 'Administrativo' => 'Administrativo', 'Gestor' => 'Gestor', 'Professor' => 'Professor', 'Outros' => 'Outros'], isset($cliente->cargo) ? $cliente->cargo : '', ['class' => 'form-control']) !!}

					  </div>
					</div>

					<br><br>
					<legend>Contato</legend>
					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="foneGeral">Telefone Geral</label>  
					  <div class="">
						{!! Form::text('foneGeral', isset($cliente->foneGeral) ? $cliente->foneGeral : null, ['class' => 'form-control input-md', 'placeholder' => 'ex: (00) 0000-0000']) !!}
					  <span class="help-block">Pode ser telefone de um responsável</span>  
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="foneOpcao">Telefone Opcional</label>  
					  <div class="">
						{!! Form::text('foneOp', isset($cliente->foneOp) ? $cliente->foneOp : null, ['class' => 'form-control input-md', 'placeholder' => 'ex: (00) 0000-0000']) !!}
					    
					  </div>
					</div>

					<!-- Text input-->
					<div class="form-group">
					  <label class="col-md-4 control-label" for="endereco">Endereço</label>  
					  <div class="">
					  						{!! Form::text('endereco', isset($cliente->endereco) ? $cliente->endereco : null, ['class' => 'form-control input-md', 'placeholder' => 'ex: Av./Rua (nome), 0000']) !!}
					  </div>
					</div>
											{!! Form::submit('SALVAR', ['class' => 'btn btn-default']) !!}
						</fieldset>
						</div>
											{!! Form::close() !!}
								</div>
							</div>	
@endsection