@extends('layouts.master')

@section('content')
<br>
<div class="page-header"><h1>BIBLIOTECA EDITORAS</h1></div>
<div class="panel panel-default">
	<div class="table-responsive">
	<p><span class="label label-success">Total de registros cadastrados: {{ $editoras->total() }}</span></p>
	<table class="table table-hover table-bordered table-condensed">
 		
 		<th><b>NOME</b></th>
 		<th><b>LOCAL</b></th>
 		<th><b>AÇÕES</b></th>
 		<tr>
 			<td></td>
 			<td></td>
 			<td wid>{!! HTML::link('biblioteca/editoras/add', 'ADICIONAR') !!}</td>
		</tr>
	@forelse($editoras as $editora)
		<tr>
			<td>{{$editora->nome}}</td>
			<td>{{$editora->local}}</td>
			<td width="160px">{!! HTML::link("biblioteca/editoras/ed/u/{$editora->id}", 'EDITAR') !!} | {!! HTML::link("biblioteca/editoras/rm/d/{$editora->id}", 'APAGAR') !!}</td> 
  		</tr>
  	@empty
		<p class="bg-danger">Nenhum registro encontrado no banco de dados... </p><br>
		{!! HTML::link('biblioteca', 'CLIQUE PARA VOLTAR', ['class' => 'btn btn-warning']) !!}</p><br>
	@endforelse
	</table>
	<center>{!! $editoras->render() !!}</center>
	</div>
</div>
@endsection