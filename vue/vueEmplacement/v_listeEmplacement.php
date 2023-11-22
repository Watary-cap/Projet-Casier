<div class ="row">
 	<table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>NOM</th>
						<th>NOMBRE_DE_CASIERS</th>
						</tr>
				</thead>
			<?php foreach($data as $ligne){ ?>
					
				<tr>
						<td><?php echo $ligne['id']; ?></td>
						<td><?php echo $ligne['nom'];?></td>
						<td><?php echo $ligne['nombre_de_casiers'];?></td>
						<td>
						<a href="index.php?ctl=Emplacement&action=fiche&id=<?php echo $ligne['id'];?>">
							<img src=".\vue\images\editer.png"width=20px height=20px>
						</a>
						
						</td>
					</tr>
				<?php	
				}
				echo "</table>";
			?>

 
</div>
