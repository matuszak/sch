@extends('layouts.master')

@yield('content')
	<p>Bem vindo!</p>
 {{ time() }}.

@section('footer')
	@parent
@endsection
