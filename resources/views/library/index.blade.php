@extends('layouts.master')

@section('content')
	<h1>Biblioteca 1 Aplicação principal</h1>
	
	{!! HTML::link('biblioteca/generos', 'GÊNEROS') !!} | {!! HTML::link('biblioteca/series', 'SÉRIES E COLEÇÕES') !!} | {!! HTML::link('biblioteca/editoras', 'EDITORAS') !!}
@endsection



