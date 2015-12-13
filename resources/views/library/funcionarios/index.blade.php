@extends('layouts.master')

@section('content')
<br>
<div class="page-header">	
	<h1>BIBLIOTECA - FUNCIONÁRIOS</h1>
</div>
	<div class="table-responsive">
	<p><span class="label label-success">Total de registros cadastrados: {{ $funcionarios->total() }}</span></p>
	<table class="table table-hover table-fluid table-bordered table-condensed">
 		
 		<th><b>NOME</b></th>
 		<th><b>NOME</b></th>
 		<th><b>NOME</b></th>
 		<th><b>NOME</b></th>
 		<th><b>NOME</b></th>
 		<th><b>LOCAL</b></th>
 		<th><b>AÇÕES</b></th>

 		<tr>
 			<td></td>
 			<td></td>
 			<td></td>
 			<td></td>
 			<td></td>
 			<td></td>
 			<td wid>{!! HTML::link('biblioteca/funcionarios/add', 'ADICIONAR') !!}</td>
		</tr>
	@forelse($funcionarios as $funcionario)
		<tr>
			<td>{{$funcionario->nome}}</td>
			<td>{{$funcionario->local}}</td>
 			<td>{{$funcionario->cpf}}</td>
 			<td>{{$funcionario->fone}}</td>
 			<td>{{$funcionario->email}}</td>
 			<td>{{$funcionario->dataNascimento}}</td>
 			<td>{{$funcionario->matricula}}</td>
			<td width="160px">{!! HTML::link("biblioteca/funcionarios/ed/u/{$funcionario->id}", 'EDITAR') !!} | {!! HTML::link("biblioteca/funcionarios/rm/d/{$funcionario->id}", 'APAGAR') !!}</td> 
  		</tr>
  	@empty
		<p class="bg-danger">Nenhum registro encontrado no banco de dados... </p><br>
		{!! HTML::link('biblioteca', 'CLIQUE PARA VOLTAR', ['class' => 'btn btn-warning']) !!}</p><br>
	@endforelse
	</table>
	<center>{!! $funcionarios->render() !!}</center>
	</div>
@endsection
