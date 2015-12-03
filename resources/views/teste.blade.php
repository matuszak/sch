<center><h1>Formulário 1 - (INSERIR)</h1></center>
<hr>
<center>
<form action="{{url('teste')}}" method="post" role="form">
	<legend>Formulário de contato (teste inicial)</legend>
	<br><br>
	<label>Nome:</label>
	<input type="text" name="nome" id="user_nome" placeholder="Digite seu nome aqui!">
	<br><br>
	<label>Password: </label>
	<input type="password" name="password" id="user_password" placeholder="Digite sua senha">
	<input type="hidden" name="_token" value="{{csrf_token()}}" />
	<br><br>
	<button type="submit" name="add" id="user_add" class="btn btn-primary">Salvar</button>
</form>
</center>
