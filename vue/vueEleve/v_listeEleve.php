<div class ="row">
 	<table class="table table-striped">
				<thead>
					<tr>
						<th>NUMERO</th>
						<th>NOM</th>
						<th>PRENOM</th>
						<th>CLASSE</th>
						</tr>
				</thead>
			<?php foreach($data as $ligne){ ?>
					
				<tr>
					<td><?php echo $ligne['id'];?></td>
					<td><?php echo $ligne['nom_eleve'];?></td>
					<td><?php echo $ligne['prenom_eleve'];?></td>
					<td><?php echo $ligne['classe'];?></td>
				</tr>
				<?php	
				}
				echo "</table>";
			?>
</div>