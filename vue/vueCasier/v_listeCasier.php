<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

<style>
.custom-select {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0;
}
</style>

<div class="container">
  <form action="/recherche/" method="get">
    <fieldset>    
      <div class="input-group">
        <div class="input-group-prepend">
          <select id="oCategorie" name="oCategorie" class="custom-select bg-primary text-light">
            <option selected="selected" value="0">STATUT</option>
            <hr>
            <option value="1">Affecté</option>
            <option value="2">Libre</option>
            <option value="3">Maintenance</option>
          </select>
        </div>
        <input id="oSaisie" name="oSaisie" type="text" class="form-control" aria-label="Saisie de mots clés" placeholder="Mot(s) clé(s)" required="required">
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
                <th>Actions</th>
            </tr>
        </thead>
        <?php foreach ($data as $ligne) { ?>
            <tr>
                <td><?php echo $ligne['numero']; ?></td>
                <td><?php echo $ligne['statut']; ?></td>
                <td><?php echo $ligne['nom']; ?></td>
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