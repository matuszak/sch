
@extends('layouts.master')
@section('content')
<br>
<div class="page-header"><h1>BIBLIOTECA CLIENTES</h1></div>
<div class="panel panel-default">
	<div class="table-responsive">
	<p><span class="label label-success">Total de registros cadastrados: {{ $clientes->total() }}</span></p>
	<table class="table table-hover table-bordered table-condensed">
 		<th><b>NOME</b></th>
 		<th><b>CPF</b></th>
 		<th><b>FONE</b></th>
 		<th><b>E-MAIL</b></th>
 		<th><b>DATA N.</b></th>
 		<th><b>AÇÕES</b></th>
		<tr>
 			<td></td>
 			<td></td>
 			<td></td>
 			<td></td>
 			<td></td>
 			<td wid>{!! HTML::link('biblioteca/clientes/add', 'ADICIONAR') !!}</td>
		</tr>
	@forelse($clientes as $cliente)
		<tr>
			<td>{{$cliente->nome}}</td>
			<td>{{$cliente->cpf}}</td>
 			<td>{{$cliente->fone}}</td>
 			<td>{{$cliente->email}}</td>
 			<td>{{$cliente->dataNascimento}}</td>
 			<td width="160px">{!! HTML::link("biblioteca/clientes/ed/u/{$cliente->id}", 'EDITAR') !!} | {!! HTML::link("biblioteca/clientes/rm/d/{$cliente->id}", 'APAGAR') !!}</td> 
  		</tr>
  	@empty
		<p class="bg-danger">Nenhum registro encontrado no banco de dados... </p><br>
		{!! HTML::link('biblioteca', 'CLIQUE PARA VOLTAR', ['class' => 'btn btn-warning']) !!}</p><br>
	@endforelse
	</table>
	<center>{!! $clientes->render() !!}</center>
	</div>
@endsection
