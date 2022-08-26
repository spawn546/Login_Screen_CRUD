<?php 
	
	session_start();

	$dsn = 'mysql:host=localhost;dbname=general';
	$user = 'root';
	$pass = ''; 

	global $conexao;



try{

	$conexao = new PDO($dsn, $user, $pass);
	$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e) {
	echo "ERRO: ". $e->getMessage();
	exit;
}

	

