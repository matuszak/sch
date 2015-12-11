@extends('layouts.master')

@section('content')

<div class="page-header">
	<h1>BIBLIOTECA FUNCIONARIOS</h1>
</div>

	<div class="table-responsive">
	<p><span class="label label-success">Total de registros cadastrados: {{ $funcionarios->total() }}</span></p>
	<table class="table table-hover table-bordered table-condensed">
 		
 		<th><b>NOME</b></th>
 		<th><b>LOCAL</b></th>
 		<th><b>AÇÕES</b></th>
 		<tr>
 			<td></td>
 			<td></td>
 			<td wid>{!! HTML::link('biblioteca/funcionarios/add', 'ADICIONAR') !!}</td>
		</tr>

	@forelse($funcionarios as $funcionario)

		<tr>
			<td>{{$funcionario->nome}}</td>
			<td>{{$funcionario->local}}</td>
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