<!DOCTYPE html>
<html lang="en">

<head>
	<title>Criptogrfia</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

	<div class="container">
		<h2>Cadastro de Usuário</h2>

		<form action="cadusuariohash.php" method="POST">
			<div class="form-group">
				<label for="nome">Nome:</label>
				<input type="nome" class="form-control" id="nome" placeholder="Nome" name="nome">
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" class="form-control" id="email" placeholder="Email" name="email">
			</div>
			<div class="form-group">
				<label for="senha">Senha:</label>
				<input type="senha" class="form-control" id="senha" placeholder="Senha" name="senha">
			</div>

			<button type="enviar" class="btn btn-primary">Enviar</button>
		</form>
	</div>

</body>

</html>