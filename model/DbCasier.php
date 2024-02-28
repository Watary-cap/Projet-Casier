<?php
require_once "MysqlDb.php";

class DbCasier{
	
	public static function getAllCasiersEmp(){
		$sql = "SELECT * FROM emplacement,casiers,eleves,affectations 
		WHERE casiers.emplacement_id=emplacement.id_emp
		AND affectations.id_eleve = eleves.id
		AND affectations.id_casier= casiers.idcasier;";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->query($sql); //objet classe PDOStatement
		$tabResult = $objResult->fetchall(); // tableau
		return $tabResult;
	}

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

	public static function  RechercheParStatut($statut){
		$sql = "SELECT * FROM emplacement,casiers,eleves,affectations 
		WHERE casiers.emplacement_id=emplacement.id
		AND affectations.id_eleve = eleves.id
		AND affectations.id_casier= casiers.id
		AND statut='$statut';";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->query($sql); //objet classe PDOStatement
		$tabResult = $objResult->fetchAll(); // tableau
		return $tabResult;
	}

	public static function  RechercheParEmplacement($Emplacement){
		$sql = "SELECT * FROM emplacement,casiers,eleves,affectations 
		WHERE casiers.emplacement_id=emplacement.id
		AND affectations.id_eleve = eleves.id
		AND affectations.id_casier= casiers.id
		AND nom='$Emplacement';";
		$connect = MysqlDb::getPdoDb();//objet classe PDO
		$objResult = $connect->query($sql); //objet classe PDOStatement
		$tabResult = $objResult->fetchAll(); // tableau
		return $tabResult;
	}

	public static function updateCasier($id,$statut){
		$sql = "UPDATE casiers SET statut = '$statut' WHERE id = $id";
        $connect = MysqlDb::getPdoDb(); // Obtenez la connexion PDO
        $objResult = $connect->exec($sql); // Exécutez la requête de mise à jour

        return $objResult;
    }
}

?>