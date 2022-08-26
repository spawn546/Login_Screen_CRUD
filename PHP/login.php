<?php

	

	
	if (isset($_POST['login']) && !empty($_POST['login']) && isset($_POST['password']) && !empty($_POST['password'])) {
		
		require 'conexao.php';
		require 'user_class.php';
		
		$usuario = new User();

		$login = addslashes($_POST['login']);
		$password = addslashes($_POST['password']);
	
	}else {

		header("Location: ../index.php");

	}
	
		if($usuario->login($login,$password) == true){
				if(isset($_SESSION['iduser'])){
						header("Location: ../home.php");
				}else{
					header("Location: ../index.php");} 
				}else{
				header("Location: ../index.php");


			
}








?>