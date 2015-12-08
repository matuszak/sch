@extends('layouts.master')

@section('content')
	<h1><small>BIBLIOTECA</small> SÉRIES E COLEÇÕES</h1>
	<div class="table-responsive">
	<table class="table table-hover table-bordered">
 		
 		<th><b>NOME</b></th>
 		<th><b>AÇÕES</b></th>
 		<tr>
 			
 			<td></td>
 			<td wid>{!! HTML::link('biblioteca/series/add', 'ADICIONAR') !!}</td>
		</tr>
	@forelse($series as $serie)
		<tr>
			
			<td>{{$serie->nome}}</td>
			<td width="160px">{!! HTML::link("biblioteca/series/ed/u/{$serie->id}", 'EDITAR') !!} | {!! HTML::link("biblioteca/series/rm/d/{$serie->id}", 'APAGAR') !!}</td> 
  		</tr>
  	@empty
		<p class="bg-danger"><li>Nenhum registro encontrado no banco de dados... </p><br>
		{!! HTML::link('biblioteca/series', 'CLIQUE PARA VOLTAR', ['class' => 'btn btn-warning']) !!}</p><br>
	@endforelse
	</table>
	</div>
@endsection