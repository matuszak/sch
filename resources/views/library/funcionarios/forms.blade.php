@extends('layouts.master')
@section('content')
@include('includes.showErrors')

@if (isset($acao))
	@if($acao == "d")
		<div class="panel panel-default">
			<h1>BIBLIOTECA | FUNCIONÁRIO: EXCLUIR REGISTRO</h1>
			<p class="bg-danger"><b>O REGISTRO SERÁ EXCLUÍDO, DESEJA CONFIRMAR?</b></p>
		<div class="panel-heading"><h2 class="panel-title">EXCLUIR REGISTRO</h2></div>
		<div class="panel panel-default">
  			<div class="panel-body">
		{!! Form::open( ['url' => "biblioteca/funcionarios/rm/d/$funcionario->id", 'class'=>'form form'] ) !!}
		{!! Form::hidden('id', $funcionario->id) !!}
	@endif
@endif

@if (isset($funcionario))
	@if($acao == "u")
	<div class="panel panel-default">
		<h1>BIBLIOTECA | FUNCIONÁRIO: EDITAR REGISTRO</h1>
		<div class="panel-heading"><h2 class="panel-title">ALTERAÇÕES NO REGISTRO</h2></div>
		<div class="panel panel-default">
  			<div class="panel-body">
		{!! Form::open( ['url' => "biblioteca/funcionarios/ed/$funcionario->id", 'class'=>'form form'] ) !!}
	@endif

@else

<div class="panel panel-default">
	<h1>BIBLIOTECA | FUNCIONÁRIO: ADICIONAR NOVO</h1>
	<div class="panel-heading"><h2 class="panel-title">INCLUIR NOVO REGISTRO</h2></div>
	<div class="panel panel-default">
  		<div class="panel-body">
	{!! Form::open( ['url' => 'biblioteca/funcionarios/add', 'class' => 'form'] ) !!}

@endif
{{--    
	$table->string('nome', 16);
	+$table->string('sobrenome', 50);++
	+$table->integer('user_id');+++
    $table->string('cpf', 16);
    $table->string('rg', 16);+++
    $table->date('dataNascimento');
    $table->string('foneGeral', 18);
    $table->string('foneComercial', 18);
    $table->char('sexo', 1);
    $table->string('endereco', 100);
    $table->string('cargo', 18); ++++
    $table->timestamps();
--}}
  <fieldset>
    <legend>Dados Pessoais</legend>
    <div class="form-inline">
    	<div class="form-group">
 
		      <label for="nome">Nome</label> 	
		      <input type="text" name="nome"  class="form-control" id="nome" placeholder="Primeiro Nome" />
		

		      	<label for="Sobrenome" >Sobre Nome</label>     
		      	<input type="text" name="sobreNome" class="form-control" id="sobreNome" placeholder="Sobre Nome" />

		</div>
	
		<div class="form-group">
		   
		      	<label for="dataNascimento">Data Nascimento</label>
		      	<input type="text" name="dataNascimento" class="form-control form-group" id="dataNascimento" placeholder="dd/mm/aaaa" /> 
		   
		</div>  	
    </div>
    <br>
    <div class="form-inline">
    <div class="col-sm-1 form-group"><label class="col-sm-offset-1">Genero:</label></div>
      <label for="radio" class="col-sm-1">Feminino</label>
      <input type="radio" class="col-sm-offset-1" name="sexo" id="radio" value="f" />
      <label for="radio" class="col-sm-1">Masculino</label>
      <input type="radio" class="col-sm-offset-1" name="sexo" id="radio" value="m" />
     </div>
  </fieldset>
 
  <fieldset>
    <legend>Dcoumentos</legend>
   
      <label for="cpf">CPF</label>
      <input type="text" name="cpf" id="cpf" />

      <label for="rg">Rg</label>
      <input type="text" name="rg" id="rg" />

      <label for="cargo">Cargo</label>
      <select name="cargo" size="1" id="cargo">
        <option value="administrativo">Administrativo</option>
        <option value="professor">Professor</option>
        <option value="gestor">Gestor</option>
        <option value="outros">Outros</option>
      </select>

  </fieldset>
  <fieldset><legend>Contato</legend>

      <label for="foneGeral">Fone Geral</label>
      <input type="text" name="foneGeral" id="foneGeral" />


      <label for="foneComercial">Fone Comercial</label>
      <input type="text" name="foneComercial" id="foneComercial" />

      <label for="endereco">Endereco</label>
      <input type="text" name="endereco" id="endereco" />

  </fieldset>






<legend>Informações pessoais</legend>


	<div class="row">
  		<label for="nome" class="col-sm-1 control-label">Nome</label>
  	<div class="col-xs-3">    	<input type="text" name="nome" class="form-control form-group" placeholder="Nome">  	</div> 	
  		<label for="sobrenome" class="col-sm-3 control-label">Sobre Nome</label>
  	<div class="col-xs-5"> 		<input type="text" name="sobrenome" class="form-control form-group" placeholder="Sobre Nome">	 </div>
 	<div class="form-horizontal">
 		<label for="dataNascimento" class="col-sm-1">Dia Nasc</label>
  	<div class="col-xs-2"> 		<input type="text" name="dataNascimento" class="form-control form-group" placeholder="dd/mm/aaaa">	 </div>
  	</div>
</div>
</fieldset>

<fieldset>
	<legend>Documentos</legend>
	<div class="form-horizontal">
		<div class="row">
			<label for="cpf" class="col-sm-1 control-label">CPF</label>
			<div class="col-xs-2"><input type="text" name="cpf" class="form-control form-group" placeholder="ex: 111222333-44"></div>
		
			<label for="rg" class="col-sm-5 control-label">Registro Geral</label>
			<div class="col-xs-3"><input type="text" name="rg" class="form-control form-group" placeholder="ex: 000000000"></div>
		</div>
	</div>

</fieldset>

	<label for="cpf" class="col-sm-1 control-label">CPF</label>
	<div class="col-sm-2">{!! Form::text('cpf', isset($funcionario->cpf) ? $funcionario->cpf : null, ['class' => 'form-control form-group', 'placeholder' => '111222333-44']) !!}</div>

	<label for="dataNascimeto" class="col-sm-3 control-label">Data Nascimento</label>
	<div class="col-sm-2">{!! Form::text('dataNascimento', isset($funcionario->dataNascimento) ? $funcionario->dataNascimento : null, ['class' => 'form-control form-group', 'placeholder' => '']) !!}</div>
</div>

<label >Sexo	
	<label class="radio-inline col-sm-3">
	  <input type="radio" name="sexo" id="sexo" value="f"> Feminino
	</label>
	<label class="radio-inline col-sm-1">
	  <input type="radio" name="sexo" id="sexo2" value="m"> Masculino
	</label>
</label>

</fieldset>
<br>
<fieldset>
	<legend>Contato</legend>
	<div class="form-horizontal">
		<label for="endereco" class="col-sm-2 control-label">Endereço</label>
    <div class="col-sm-10">
      <input type="endereco" class="form-control" id="endereco" placeholder="(Av/Rua Nome da sua av/rua, 0000)">
	
	{!! Form::text('telefone', isset($funcionario->fone) ? $funcionario->fone : null, ['class' => 'form-control form-group']) !!}
	<div class="input-group">
   	<div class="input-group-addon">@</div>
   	<input type="text" class="form-control form-group" id="email" placeholder="e-mail">
    </div>
</div>
</fieldset>
<br>
	{!! Form::submit('SALVAR', ['class' => 'btn btn-primary']) !!}
	{!! Form::close() !!}
		</div>
	</div>

@endsection