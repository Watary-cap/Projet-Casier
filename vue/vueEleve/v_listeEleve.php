<div class ="row">
 	<table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>MATRICULE</th>
						<th>NOM</th>
						<th>PRENOM</th>
						<th>CLASSE</th>
						</tr>
				</thead>
			<?php foreach($data as $ligne){ ?>
					
				<tr>
						<td><?php echo $ligne['id']; ?></td>
						<td><?php echo $ligne['matricule'];?></td>
						<td><?php echo $ligne['nom'];?></td>
						<td><?php echo $ligne['prenom'];?></td>
						<td><?php echo $ligne['classe'];?></td>
						<td>
						<a href="index.php?ctl=Eleve&action=fiche&id=<?php echo $ligne['id'];?>">
							<img src=".\vue\images\editer.png"width=20px height=20px>
						</a>
						
						</td>
					</tr>
				<?php	
				}
				echo "</table>";
			?>
</div>