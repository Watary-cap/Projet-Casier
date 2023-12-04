<?php
include './model/DbEmplacement.php';

$action =$_GET['action'];

switch($action){


            case 'fiche':

            //récuperation de l'id de l'url
                $id = $_GET['id'];

             //appel à la base de donnée le modele
                $data = DbEmplacement::getUnEmplacement($id);

             //appel à la vue
             include 'vue/vueEmplacement/v_ficheEmplacement.php';

             break;

            case 'lister':
             //appel à la base de donnée le modele
                $data = DbEmplacement::getAllEmplacement();

             //appel à la vue
             include 'vue/vueEmplacement/v_listeEmplacement.php';

             break;
             case 'modifEmplacement':
                $id = $_POST['id'];
                $nb = $_POST['nb'];

                //appel à la base de donnée le modele
                   DbEmplacement::updateEmplacement($id,$nb);

                //appel à la vue
                $data = DbEmplacement::getAllEmplacement();
                include 'vue/vueEmplacement/v_listeEmplacement.php';

                break;

        }

?>