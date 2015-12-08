@extends('layouts.master')

@section('content')
	<h1>Listagem de clientes cadastrados</h1>
ok.
	@foreach($cli as $cliente)
		
		<br>Nome: {{$cliente->nome}} 
		
		
			 
	@endforeach

@endsection