@extends('layouts.master')

@section('content')
	<h1><small>BIBLIOTECA</small> SÉRIES E COLEÇÕES</h1>
	<hr>
	<div class="table-responsive">
	<p><span class="label label-success">Total de registros cadastrados: {{ $series->total() }}</span></p>
	<table class="table table-hover table-bordered table-condensed">
 		
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
		<p class="bg-danger">Nenhum registro encontrado no banco de dados... </p><br>
		{!! HTML::link('biblioteca', 'CLIQUE PARA VOLTAR', ['class' => 'btn btn-warning']) !!}</p><br>
	@endforelse
	</table>
	<center>{!! $series->render() !!}</center>
	</div>
@endsection