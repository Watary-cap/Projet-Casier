<?php
require_once "MysqlDb.php";

class DbConnect{

	public static function verifPassword($pwd)
	{
		$longueur = strlen($pwd);
		return ($longueur >= 6);
	}

	public static function verifLogin($x,$y){
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		
		$sql = "SELECT * FROM utilisateurs WHERE email =:mail and pwd=:mdp";			
		$objPrepare =$connect->prepare($sql);
		
		$objPrepare->bindParam(':mail', $x);
		$objPrepare->bindParam(':mdp', $y);
		
		$objPrepare->execute();
		
		$result = $objPrepare->fetch();//tableau résultat (enregistrement bd)
		
		return $result;		
	}
			
}

?>