<?php
include './model/DbAffectation.php';

$action =$_GET['action'];

switch($action){
		
			case 'fiche':
			
			//récuperation de l'id de l'url
				$id = $_GET['id'];
				
			 //appel à la base de donnée le modele
				$data = DbEleve::getUneAffectation($id);
			 
			 //appel à la vue
			 include 'vue/vueAffectation/v_listeAffectation.php';
			 
			 break;
			 
			case 'listeAffectation':
			 //appel à la base de donnée le modele
				$data = DbAffectation::getAllAffectation();
			 
			 //appel à la vue
			 include 'vue/vueAffectation/v_listeAffectation.php';
			 
			 break;
				
		}

?>