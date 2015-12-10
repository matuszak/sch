@extends('layouts.master')

@section('content')
@section('content')
<br>
<div class="page-header"><h1>BIBLIOTECA GÊNEROS</h1></div>
<div class="panel panel-default">
	<div class="table-responsive">
	<p><span class="label label-success">Total de registros cadastrados: {{ $generos->total() }}</span></p>
	<table class="table table-hover table-bordered table-condensed">
 		<tr>
 		<th><b>NOME</b></th>
 		<th><b>AÇÕES</b></th>
 		</tr>
 			<td></td>
 			<td>{!! HTML::link('biblioteca/generos/add', 'ADICIONAR') !!}</td>
		</tr>
	@forelse($generos as $genero)
		<tr>
			
			<td>{{$genero->nome}}</td>
			<td width="160px">{!! HTML::link("biblioteca/generos/ed/u/{$genero->id}", 'EDITAR') !!} | {!! HTML::link("biblioteca/generos/rm/d/{$genero->id}", 'APAGAR') !!}</td> 
  		</tr>
  	@empty
		<p>Nenhum registro encontrado no banco de dados... {!! HTML::link('biblioteca', 'CLIQUE PARA VOLTAR', ['class' => 'btn btn-success']) !!}</p>
	@endforelse
	</table>
	<center>{!! $generos->render() !!}</center>
	</div>

@endsection