<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />

    <!-- Ajoutez ces lignes pour Select2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" integrity="sha512-69rRIN2WO+eDy2w3FUxofPTc6pR3/YNcnu//oXUN19NshPStT8V22HbeVCWiBv5s7zn3EsfuebjH9uJ3DEyijA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js" integrity="sha512-Mn1OjPwoEX3JmiZt8kOkErJiVJLK6WHK2M9T+DXXSLv+DHZT+QV3Z92vc1N97FenCA5vPPp9gkVtgr5Qs+Gv3Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        .custom-select {
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }
    </style>
</head>

<body>
   
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3">
            <form action="index.php?ctl=Casier&action=RechercheParStatut" method="POST">
                <fieldset>
                    <div class="input-group align-items-center">
                        <div class="input-group-prepend">
                            <select id="statut" name="statut" class="custom-select bg-primary text-light select2">
                                <option selected="selected" value="0">Choisissez un statut</option>
                                <option value="Affecté">Affecté</option>
                                <option value="Libre">Libre</option>
                                <option value="Maintenance">Maintenance</option>
                            </select>
                        </div>
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">Recherche</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
        <div class="col-md-3">
            <form action="index.php?ctl=Casier&action=RechercheParEmplacement" method="POST">
                <div class="input-group align-items-center">
                    <div class="input-group-prepend">
                        <select id="Emplacement" name="Emplacement" class="custom-select bg-primary text-light select2">
                            <option selected="selected" value="1">Choisissez un emplacement</option>
                            <option value="BAT D - Préau WC Filles">BAT D - Préau WC Filles</option>
                            <option value="Bâtiment C">BAT C</option>
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
            </form>
        </div>
    </div>
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
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $ligne['id']; ?>">
                            Modifier
                        </button>
                    </td>
                </tr>
                <!-- Modal -->
                <div class="modal fade" id="myModal<?php echo $ligne['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modifier les informations du Casier</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Formulaire ici -->
                                <form action="index.php?ctl=Casier&action=modifStatut" method="post">
                                    <label for="statut">Statut du Casier:</label>
                                    <select id="statut" name="statut" required>
                                        <option value="Affecté" <?php echo ($ligne['statut'] === 'Affecté') ? 'selected' : ''; ?>>Affecté</option>
                                        <option value="Libre" <?php echo ($ligne['statut'] === 'Libre') ? 'selected' : ''; ?>>Libre</option>
                                        <option value="Maintenance" <?php echo ($ligne['statut'] === 'Maintenance') ? 'selected' : ''; ?>>Maintenance</option>
                                    </select>
                                    <br>
                                    <!-- Ajoutez d'autres champs selon vos besoins -->
                                    <input type="hidden" name="id" value="<?php echo $ligne['id']; ?>">
                                    <div class="form-group text-center"> <!-- Ajout de la classe text-center -->
                                        <button type="submit" class="btn btn-primary">Modifier</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </table>
    </div>

    <!-- JS Bootstrap (optional) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Ajoutez ce script pour initialiser Select2 -->
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>

</body>

</html>
