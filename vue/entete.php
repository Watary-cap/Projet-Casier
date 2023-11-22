<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Container Example</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
   </head>
  <body>
   <div class= "container-fluid m-0">
		
		<div class= "row bg-dark text-white">
            <div class ="col-10 "><h4>Saint-Aspais</h4>
				<?php
					if(isset($_SESSION['email'])){
						echo $_SESSION['email'];
					}
				?>			
			</div>
			<?php if(!isset($_SESSION['connect'])){  ?>
			<div class ="col-2"><a href="index.php?ctl=connexion&action=connecter"></a></div>
			<?php }else { ?>
			<div class ="col-2"><a href="index.php?ctl=connexion&action=deconnecter">déconnecter </a></div>	
			<?php } ?>
		</div>
		
		
		