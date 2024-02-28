<?php
include './model/DbEmplacement.php';

$action = $_GET['action'];

switch ($action) {
    case 'fiche':
        // Récupération de l'id de l'url
        $id = $_GET['id'];

        // Appel à la base de données le modèle pour récupérer les informations sur l'emplacement
        $data = DbEmplacement::getUnEmplacement($id);

        // Appel à la base de données le modèle pour récupérer les informations sur les casiers
        $casiers = DbEmplacement::getCasiersForEmplacement($id);

        // Appel à la vue
        include 'vue/vueEmplacement/v_ficheEmplacement.php';
        break;

    case 'lister':
        // Appel à la base de données le modèle pour récupérer toutes les informations sur les emplacements
        $data = DbEmplacement::getAllEmplacement();

        // Appel à la vue
        include 'vue/vueEmplacement/v_listeEmplacement.php';
        break;

    case 'modifEmplacement':
        $id = $_POST['id'];
        $nb = $_POST['nb'];

        // Appel à la base de données le modèle pour mettre à jour les informations sur l'emplacement
        DbEmplacement::updateEmplacement($id, $nb);

        // Appel à la base de données le modèle pour récupérer toutes les informations sur les emplacements
        $data = DbEmplacement::getAllEmplacement();

        // Appel à la vue
        include 'vue/vueEmplacement/v_listeEmplacement.php';
        break;

    case 'listCasier':
        $id=$_GET['idemp'];
        // Appel à la base de données le modèle pour récupérer toutes les informations sur les emplacements
        $data = DbEmplacement::getCasiersForEmplacement($id);

        $data2 = DbEmplacement::getUnEmplacement($id);

        $data3 = DbEmplacement::getEmpForEleve($id);
        // Appel à la vue
        include 'vue/vueEmplacement/v_listCasierparEmp.php';
        break;
}
?>
