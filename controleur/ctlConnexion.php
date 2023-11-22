<?php
include './model/DbConnect.php';
$action =$_GET['action'];
switch($action){
		
			case 'connecter':
				$_SESSION['connect'] =true;
				header('Location: index.php');
			 
			 break;
			 
			 case 'deconnecter':
				session_destroy();
				//unset($_SESSION['connect']);
				//unset($_SESSION['email']);
				header('Location: index.php');
		
			break;
			case 'veriflogin':
			
				$email = $_POST['myEmail'];
				$pwd = $_POST['myPassword'];
				if(DbConnect::verifPassword($pwd)==true){
					
					//appel à la fonction verifLogin de Dbconnect du modele
					$tabresult = DbConnect::verifLogin($email,$pwd);
				
					if($tabresult==true){
						$_SESSION['connect'] =true;
						$_SESSION['email'] =$email;
						header('Location: index.php');
					}else
					{
						session_destroy();
						unset($_SESSION['connect']);
						header('Location: index.php');
					}
				}else{
					header('Location: index.php?msgPwd=critères mdp non réspéctés');
				}					
			break;			
		}
?>