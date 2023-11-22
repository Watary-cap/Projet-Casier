<?php
require_once "MysqlDb.php";

class DbEleve{

	public static function getAllEleve(){
		$sql = "select * from eleves";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->query($sql); //objet classe PDOStatement
		$tabResult = $objResult->fetchAll(); // tableau
		return $tabResult;
	}
	
public static function getUnEleve($x){
	$sql = "SELECT * FROM eleves WHERE id = :id";
	$connect = MysqlDb::getPdoDb();//objet classe PDO
	$stmt = $connect->prepare($sql);
	$stmt->bindParam(':id', $x, PDO::PARAM_INT);
	$stmt->execute();
	$tabResult = $stmt->fetch(PDO::FETCH_ASSOC);
	return $tabResult;
}
	
	
	public static function addEleve(){
		
	}
	public static function updateEleve(){
		
	}
	public static function deleteEleve($id){
		$sql = "delete from eleves where id = $id";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->exec($sql); //objet classe PDOStatement

	}
		
}

?>