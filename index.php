<?php
session_start();
include 'vue/entete.php';
if(isset($_SESSION['connect'])){
		include 'vue/menu.php';	
}
		if(isset($_GET['ctl']))
		{
			switch($_GET['ctl']){
								 
					case 'Casier':
					 include 'controleur/ctlCasier.php';
					 break;
					 
					case 'connexion':
					 include 'controleur/ctlConnexion.php';
					 break;	
					 
					 case 'Eleve':
					 include 'controleur/ctlEleve.php';
					 break;

					 case 'Emplacement':
						include 'controleur/ctlEmplacement.php';
						break;
						case 'Reservation':
							include 'controleur/ctlReservation.php';
							break;
				}	
		}		
if(!isset($_SESSION['connect'])){
	include 'vue/vueConnexion/v_form_connexion.php';
}
include 'vue/pied.php';
?>        				 
         
