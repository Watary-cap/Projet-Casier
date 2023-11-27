<?php
include './model/DbCasier.php';

$action =$_GET['action'];

switch($action){
		
		
			case 'fiche':
			
			//récuperation de l'id de l'url
				$id = $_GET['id'];
				
			 //appel à la base de donnée le modele
				$data = DbCasier::getUnCasier($id);
			 
			 //appel à la vue
			 include 'vue/vueCasier/v_ficheCasier.php';
			 
			 break;
			 
			case 'lister':
			 //appel à la base de donnée le modele
				$data = DbCasier::getAllCasier();
			 
			 //appel à la vue
			 include 'vue/vueCasier/v_listeCasier.php';
			 
			 break;
				
		}

?>