@extends('layouts.master')

@section('content')
	<h1>Listagem de gêneros cadastrados</h1>

	@foreach($gen as $genero)
		
		<br>{{$genero->nome}}
			 
	@endforeach

@endsection