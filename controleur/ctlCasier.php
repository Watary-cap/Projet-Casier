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

			 case 'listerEmpCasiers':
				
				//appel à la base de donnée le modele
				   $data = DbCasier::getAllCasiersEmp();
				
				//appel à la vue
				include 'vue/vueCasier/v_listeCasier.php';
				
				break;

			case 'RechercheParStatut':
				
				$statut=$_POST['statut'];
				
				//appel à la base de donnée le modele
				$data = DbCasier::RechercheParStatut($statut);
					
				//appel à la vue
				include 'vue/vueCasier/v_listeCasier.php';
					
			break;

			case 'RechercheParEmplacement':
				
				$Emplacement=$_POST['Emplacement'];
					
				//appel à la base de donnée le modele
				$data = DbCasier::RechercheParEmplacement($Emplacement);
						
				//appel à la vue
				include 'vue/vueCasier/v_listeCasier.php';
						
			break;
		}

?>