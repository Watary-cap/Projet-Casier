<?php
require_once "MysqlDb.php";

class DbAffectation{

	public static function getAllEleve(){
		$sql = "select * from eleves";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->query($sql); //objet classe PDOStatement
		$tabResult = $objResult->fetchAll(); // tableau
		return $tabResult;
	}
	public static function getAllEmplacement(){
		$sql = "select * from emplacement";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->query($sql); //objet classe PDOStatement
		$tabResult = $objResult->fetchAll(); // tableau
		return $tabResult;
	}

	public static function getAllAffectation(){
		$sql = "select * from affectations";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->query($sql); //objet classe PDOStatement
		$tabResult = $objResult->fetchAll(); // tableau
		return $tabResult;
	}
	
	
	public static function addEleve(){
		
	}
	public static function updateEleve(){
		
	}

	public static function addAffectation(){
		$sql = "INSERT INTO `affectations` (`id`, `id_eleve`, `id_casier`) VALUES (NULL, '$id_eleve', '$id_casier');";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->query($sql); //objet classe PDOStatement
		$tabResult = $objResult->fetchAll(); // tableau
		return $tabResult;
	}
}
?>