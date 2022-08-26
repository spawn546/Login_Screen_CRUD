<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	<link rel="stylesheet" type="text/css" href="CSS\login.css">
</head>
<body>

	<div>
		<form action="PHP\cadastro.php" method="POST">
			<p>
			<label for="nm_cad">Insira o login</label>
			<input type="text" name="nm_cad" id="nm_cad">
			</p>
			<p>
			<label for="sn_user">Insira sua senha</label>
			<input type="text" name="sn_use" id="sn_use">
			</p>
			<p>
			<button type="submit">Criar Conta</button>
			</p>
		</form>
	</div>



</body>
</html>