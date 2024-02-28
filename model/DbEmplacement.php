<?php
require_once "MysqlDb.php";

class DbEmplacement
{
    public static function getAllEmplacement()
    {
        try {
            $sql = "SELECT * FROM emplacement";
            $connect = MysqlDb::getPdoDb();
            $objResult = $connect->query($sql);
            $tabResult = $objResult->fetchAll(PDO::FETCH_ASSOC);
            return $tabResult;
        } catch (PDOException $e) {
            // Gérer l'erreur de la manière qui convient à votre application
            die("Erreur lors de la récupération des emplacements: " . $e->getMessage());
        }
    }

    public static function getUnEmplacement($x)
    {
        try {
            $sql = "SELECT * FROM emplacement WHERE id = :id";
            $connect = MysqlDb::getPdoDb();
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(':id', $x, PDO::PARAM_INT);
            $stmt->execute();
            $tabResult = $stmt->fetch(PDO::FETCH_ASSOC);
            return $tabResult;
        } catch (PDOException $e) {
            // Gérer l'erreur de la manière qui convient à votre application
            die("Erreur lors de la récupération d'un emplacement: " . $e->getMessage());
        }
    }

    public static function addEmplacement()
    {
        // Ajoutez votre logique d'ajout d'emplacement ici
    }

    public static function updateEmplacement($id, $nb)
    {
        try {
            $sql = "UPDATE emplacement SET nombre_de_casiers = :nb WHERE id = :id";
            $connect = MysqlDb::getPdoDb();
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(':nb', $nb, PDO::PARAM_INT);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();
            return true; // Modification réussie
        } catch (PDOException $e) {
            // Gérer l'erreur de la manière qui convient à votre application
            die("Erreur lors de la mise à jour de l'emplacement: " . $e->getMessage());
        }
    }

    public static function getCasiersForEmplacement($idEmplacement)
    {
        try {
            $sql = "SELECT * FROM casiers WHERE emplacement_id = :id_emplacement";
            $connect = MysqlDb::getPdoDb();
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(':id_emplacement', $idEmplacement, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } catch (PDOException $e) {
            // Gérer l'erreur de la manière qui convient à votre application
            die("Erreur lors de la récupération des casiers pour un emplacement: " . $e->getMessage());
        }
    }
    public static function getEmpForEleve($idEmplacement)
    {
        try {
            $sql = "SELECT * FROM emplacement, casiers, affectations, eleves 
            WHERE casiers.emplacement_id = emplacement.id_emp 
            AND casiers.idcasier = affectations.id_casier 
            AND affectations.id_eleve = eleves.id;";
            $connect = MysqlDb::getPdoDb();
            $stmt = $connect->prepare($sql);
            $stmt->bindParam(':id_emplacement', $idEmplacement, PDO::PARAM_INT);
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
    
        } catch (PDOException $e) {
            // Gérer l'erreur de la manière qui convient à votre application
            die("Erreur lors de la récupération des casiers pour un emplacement: " . $e->getMessage());
        }
    }
}
?>