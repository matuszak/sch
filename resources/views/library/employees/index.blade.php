@extends('layouts.master')

@yield('content')
	<h3>Lista de funcionários cadastrados!</h3>
Olá {{ $nome }}
@section('footer')
	@parent
@endsection