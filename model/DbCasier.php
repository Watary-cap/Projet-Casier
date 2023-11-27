<?php
require_once "MysqlDb.php";

class DbCasier{
	
	public static function getUnCasier($x){
		$sql = "SELECT * FROM casiers WHERE id = :id";
		$connect = MysqlDb::getPdoDb();
		$stmt = $connect->prepare($sql);
		$stmt->bindParam(':id', $x, PDO::PARAM_INT);
		$stmt->execute();
		$tabResult = $stmt->fetch(PDO::FETCH_ASSOC);
		return $tabResult;
	}
		
	public static function addCasier(){
		
	}

	public static function updateCasier(){
		
	}
	
	public static function getAllCasiersEmp(){
		$sql = "SELECT * FROM emplacement,casiers WHERE casiers.emplacement_id=emplacement.id;";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->query($sql); //objet classe PDOStatement
		$tabResult = $objResult->fetchAll(); // tableau
		return $tabResult;
	}
}

?>