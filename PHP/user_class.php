<?php 

class User{

	public function login($login, $password){
		
		global $conexao;

		$sql = "SELECT * FROM user_login where nm_login = :nm_login AND sn_user = :sn_user";

		$sql = $conexao->prepare($sql);
		$sql->bindValue("nm_login", $login);
		$sql->bindValue("sn_user", $password);
		$sql->execute();

		if ($sql->rowCount() > 0 ) {
			
			$dado = $sql->fetch();

			$_SESSION['iduser'] = $dado['id_user'];

			return true;

		}else {

			return false;

		}

		
	}


}


?>