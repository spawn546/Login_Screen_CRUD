<!DOCTYPE html>
<html>
<head>
	<title>Wiki Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="CSS\style.css">
</head>
<body>

<div class="loglogo">
	
	<img src="IMG\logo.png" style="width: 150px; height: 80px; margin:5px auto;">

</div>

<div class="container-log">	

	<div class="assideBanner">

		<img src="IMG/intra.net.svg" style="height: 60vh;margin-top:10%; margin-left: 10%;">
		
	</div>

	<div class="form-format">
			
			<img src="IMG\avatar.svg" style="width: 100px; height: 100px; margin-top: 20px;">
			<h2 style="color: orange;letter-spacing: 5px;margin-top: 5px;">WIKI</h2>
	
	<form  action="PHP\cadastro.php" method="POST">
		<h3>Cadastre-se</h3>
		<p>
			
			<input type="text" placeholder="USUARIO" name="nm_cad" class="input-format">
		</p>

		<p>
			
			<input type="password" placeholder="SENHA"  name="sn_use" class="input-format">
		</p>

		<p>
			<button type="submit" class="btn-log">Cadastrar</button>
		</p>
		
		<a class="cad-btn" href="index.php">Voltar</a>

	</form>

	</div>



</body>
</html>