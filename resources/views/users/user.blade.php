<center>
	<h1>
		User Form One (let's begin)
	</h1>
</center>
<ul>
	@foreach($errors->all() as $error)
		<li>{{ $error }}</li>
	@endforeach
</ul>

{!! Form::open(array('url' => 'users/add', 'class' => 'form')) !!}
 <div class="form-group">
    {!! Form::label('name', 'NOME: ') !!}
    {!! Form::text('name', null, array('required', 'class' => 'form-control', 'placeholder' => 'Seu nome')) !!}<br>
    <br>
</div>
<div class="form-group">
    {!! Form::submit('Submeter', array('class' => 'btn btn-primary')) !!}
</div>
{!! Form::close() !!}
