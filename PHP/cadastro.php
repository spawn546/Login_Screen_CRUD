<?php
	require 'conexao.php';

	global $conexao;





	$cad_log = ($_POST['nm_cad']);
	$cad_sen = ($_POST['sn_use']);
	
	$sql = "SELECT nm_login FROM user_login WHERE nm_login = :nm_cad";
	$sql = $conexao->prepare($sql);
	$sql->bindValue("nm_cad", $cad_log);
	$sql->execute();
	$validacao = $sql->rowCount();	
	
	if ($validacao > 0) {

	  	echo"<script type='text/javascript'>alert('Usuario Já cadastrado');window.location.href='../tem-cad.php';</script>";
	
	} else{

		$sql = "INSERT INTO user_login (nm_login,sn_user,img_user) VALUES (:nm_cad, :sn_use, '0')";
		$sql = $conexao->prepare($sql);
		$sql->bindValue("nm_cad", $cad_log);
		$sql->bindValue("sn_use", $cad_sen);
		$sql->execute();
		echo"<script type='text/javascript'>alert('Usuario Cadastrado com Sucesso');window.location.href='../index.php';</script>";
		
	}




		
	/*
		$sql = "INSERT INTO user_login (nm_login,sn_user,img_user) VALUES (:nm_cad, :sn_use, '0')";
		$sql = $conexao->prepare($sql);
		$sql->bindValue("nm_cad", $cad_log);
		$sql->bindValue("sn_use", $cad_sen);
		$sql->execute();

*/


/*header("Location: ../index.php"); */ 
?>