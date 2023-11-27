<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>
<div class ="row">
 	<table class="table table-striped">
				<thead>
					<tr>
						<th>ID</th>
						<th>NUMERO</th>
						<th>STATUT</th>
						<th>Attribution</th>
						<th>Actions</th>
						</tr>
				</thead>
			<?php foreach($data as $ligne){ ?>
					
				<tr>
						<td><?php echo $ligne['id']; ?></td>
						<td><?php echo $ligne['numero'];?></td>
						<td><?php echo $ligne['statut'];?></td>
						<td>*****</td>
						<td>
						<a href="index.php?ctl=Casier&action=fiche&id=<?php echo $ligne['id'];?>">
							<img src=".\vue\images\editer.png"width=20px height=20px>
						</a>
						
						</td>
					</tr>
				<?php	
				}
				echo "</table>";
			?>
</div>