@extends('app')
<html>
<head>
	<title>Armazenamento Listagem</title>
</head>
<body>
@section('content')
<div class="container">	
	<h1>Exemplos Persistindo Dados!</h1>

	<ul>
		@foreach($exemplos as $ex)
			<li><b>ID:</b> {{$ex->id}} <b>Exemplo: </b>{{$ex->nome}}<br> ({{$ex->descricao}})</li>
		@endforeach
	</ul>
</div>
@endsection

</body>
</html>
