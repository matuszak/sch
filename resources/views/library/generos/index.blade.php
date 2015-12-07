@extends('layouts.master')

@section('content')
	<h1>Gestão dos gêneros!</h1>

	{!! HTML::link('biblioteca/generos/add', 'ADICIONAR') !!}

	@foreach($gen as $genero)
		
		<br>{{$genero->nome}} - 
				{!! HTML::link("biblioteca/generos/edit/{$genero->id}", 'EDITAR') !!} 
			| 	{!! HTML::link("biblioteca/generos/del/{$genero->id}/0", 'APAGAR') !!}
			 
	@endforeach

@endsection