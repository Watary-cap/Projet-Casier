<?php
include './model/DbEleve.php';

$action =$_GET['action'];

switch($action){
		
		
			case 'fiche':
			
			//récuperation de l'id de l'url
				$id = $_GET['id'];
				
			 //appel à la base de donnée le modele
				$data = DbEleve::getUnEleve($id);
			 
			 //appel à la vue
			 include 'vue/vueEleve/v_listeEleve.php';
			 
			 break;
			 
			case 'lister':
			 //appel à la base de donnée le modele
				$data = DbEleve::getAllEleve();
			 
			 //appel à la vue
			 include 'vue/vueEleve/v_listeEleve.php';
			 
			 break;
				
		}

?>