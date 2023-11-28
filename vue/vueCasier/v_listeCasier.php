<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

<style>
.custom-select {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
</style>

<div class="container">
  <form action="index.php?ctl=Casier&action=RechercheParStatut" method="POST">
    <fieldset>    
      <div class="input-group">
        <div class="input-group-prepend">
          <select id="statut" name="statut" class="custom-select bg-primary text-light">
            <option selected="selected" value="0">STATUT</option>
            <hr>
            <option value="Affecté">Affecté</option>
            <option value="Libre">Libre</option>
            <option value="Maintenance">Maintenance</option>
          </select>
        </div>
        <div class="input-group-prepend">
          <select id="Emplacement" name="Emplacement" class="custom-select bg-primary text-light">
            <option selected="selected" value="0">EMPLACEMENT</option>
            <hr>
            <option value="BAT D - Préau WC Filles">BAT D - Préau WC Filles</option>
            <option value="LEP">LEP</option>
            <option value="BAT D - Petit Couloir">BAT D - Petit Couloir</option>
            <option value="BAT D - Préau Classes">BAT D - Préau Classes</option>
            <option value="BAT D - Préau WC Garçons">BAT D - Préau WC Garçons</option>
            <option value="BAT D - Grand couloir Gauche">BAT D - Grand couloir Gauche</option>
            <option value="BAT D - Grand couloir Droite">BAT D - Grand couloir Droite</option>
          </select>
        </div>
        <div class="input-group-append">
          <button class="btn btn-primary" type="submit">Recherche</button>
        </div>
      </div>
    </fieldset> 
  </form>
</div>
<div class="row">
    <table class="table table-striped mt-3">
        <thead>
            <tr>
                <th>NUMERO</th>
                <th>STATUT</th>
                <th>EMPLACEMENT</th>
                <th>NOM</th>
                <th>PRENOM</th>
                <th>Actions</th>
            </tr>
        </thead>
        <?php foreach ($data as $ligne) { ?>
            <tr>
                <td><?php echo $ligne['numero']; ?></td>
                <td><?php echo $ligne['statut']; ?></td>
                <td><?php echo $ligne['nom']; ?></td>
                <td><?php echo $ligne['nom_eleve']; ?></td>
                <td><?php echo $ligne['prenom_eleve']; ?></td>
                <td>
                    <a href="index.php?ctl=Casier&action=fiche&id=<?php echo $ligne['id']; ?>">
                        <img src="./vue/images/editer.png" width="20px" height="20px">
                    </a>
                </td>
            </tr>
        <?php
        }
        echo "</table>";
        ?>