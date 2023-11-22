<?php
require_once "MysqlDb.php";

class DbCasier{

	public static function getAllCasier(){
		$sql = "SELECT * FROM `casiers`";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->query($sql); //objet classe PDOStatement
		$tabResult = $objResult->fetchAll(); // tableau
		return $tabResult;
	}
	
	public static function getUnEmploye($x){
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
	public static function deleteCasier($id){
		$sql = "delete from casiers where id = $id";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->exec($sql); //objet classe PDOStatement

	}
		
}

?>