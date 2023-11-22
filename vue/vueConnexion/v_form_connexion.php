
<div class="container-fluid mt-3">

	<div class="card mx-auto text-center" style="width: 50%;">
	   <div class="card-header">
		 Authentification
	   </div>
	   <form action="index.php?ctl=connexion&action=veriflogin" method="post">
				<!-- Vertical -->
				<div class="form-group">
				 
				   <input type="text" name= "myEmail" class="form-control" placeholder="Email">
				
				   <input type="text" name="myPassword" class="form-control" placeholder="Password">
				   <button type="submit" class="btn btn-primary pb-2">Connecter</button>
				</div>
			 </form>

	</div>
	<?php
		if(isset($_GET['msgPwd'])){
				echo $_GET['msgPwd'];
		}
	
	?>
 </div>