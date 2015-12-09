@extends('layouts.master')

@section('content')
	<h1><small>BIBLIOTECA</small> EDITORAS</h1>
	<div class="table-responsive">
	<table class="table table-hover table-bordered">
 		
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
	</div>
@endsection