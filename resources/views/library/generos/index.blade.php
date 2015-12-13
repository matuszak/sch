@extends('layouts.master')

@section('content')
<br>
	<div class="page-header">
		<h1>BIBLIOTECA - GÊNEROS</h1>
	</div>
	<div class="table-responsive">
		<p><span class="label label-success">Total de registros cadastrados: {{ $generos->total() }}</span></p>
		<table class="table table-hover table-bordered table-condensed">
 		
	 		<th><b>NOME</b></th>
	 		<th><b>AÇÕES</b></th>
	 		<tr>
	 			<td></td>
	 			<td wid>{!! HTML::link('biblioteca/generos/add', 'ADICIONAR') !!}</td>
			</tr>
	
	@forelse($generos as $genero)
	
		<tr>
			<td>{{$genero->nome}}</td>
			<td width="160px">{!! HTML::link("biblioteca/generos/ed/u/{$genero->id}", 'EDITAR') !!} | {!! HTML::link("biblioteca/generos/rm/d/{$genero->id}", 'APAGAR') !!}</td> 
  		</tr>
  	
  	@empty
	
		<p class="bg-danger"><b>Nenhum registro encontrado no banco de dados... </b></p><br>
		<p>{!! HTML::link('biblioteca', 'CLIQUE PARA VOLTAR', ['class' => 'btn btn-warning']) !!}</p>
		<br>
	
	@endforelse
	
	</table>
	<center>{!! $generos->render() !!}</center>
	</div>
@endsection