@extends('layouts.master')

@section('content')
	<h1><small>BIBLIOTECA</small> GÊNEROS</h1>
	<div class="table-responsive">
	<table class="table table-hover table-bordered">
 		<th><b>#ID</b></th>
 		<th><b>NOME</b></th>
 		<th><b>AÇÕES</b></th>
 		<tr>
 			<td></td>
 			<td></td>
 			<td>{!! HTML::link('biblioteca/generos/add', 'ADICIONAR') !!}</td>
		</tr>
	@forelse($generos as $genero)
		<tr>
			<td width="4%">{{$genero->id}}</td>
			<td>{{$genero->nome}}</td>
			<td width="160px">{!! HTML::link("biblioteca/generos/ed/u/{$genero->id}", 'EDITAR') !!} | {!! HTML::link("biblioteca/generos/rm/d/{$genero->id}", 'APAGAR') !!}</td> 
  		</tr>
  	@empty
		<p>Nenhum registro encontrado no banco de dados... {!! HTML::link('biblioteca', 'CLIQUE PARA VOLTAR', ['class' => 'btn btn-success']) !!}</p>
	@endforelse
	</table>
	</div>
@endsection