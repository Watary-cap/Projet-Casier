<?php
require_once "MysqlDb.php";

class DbEmplacement{

	public static function getAllEmplacement(){
		$sql = "select * from emplacement";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->query($sql); //objet classe PDOStatement
		$tabResult = $objResult->fetchAll(); // tableau
		return $tabResult;
	}
	
	public static function getUnEmplacement($x){
		$sql = "select * from emplacement where id = $x";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->query($sql); //objet classe PDOStatement
		$tabResult = $objResult->fetch(); // tableau
		return $tabResult;
		
		
	}
	
	public static function addEmplacement(){
		
	}
	public static function updateEmplacement(){
		
	}
	public static function deleteEmplacement($id){
		$sql = "delete from emplacement where id = $id";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->exec($sql); //objet classe PDOStatement

	}
		
}

?>