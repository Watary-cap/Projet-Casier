<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Votre Titre</title>
</head>
<body>

<div class="container">
    <div class="row">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Identifiant</th>
                    <th>Nom</th>
                    <th>Nombre de casiers</th>
                    <th>Nombre de casiers disponible</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php foreach($data as $ligne){ ?>
                <tr>
                    <td><?php echo $ligne['id']; ?></td>
                    <td><?php echo $ligne['nom'];?></td>
                    <td><?php echo $ligne['nombre_de_casiers'];?></td>
                    <td>
                        <a href="index.php?ctl=Emplacement&action=fiche&id=<?php echo $ligne['id'];?>">
                            <img src=".\vue\images\editer.png" width=20px height=20px>
                        </a>
                    </td>
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
                                <h5 class="modal-title" id="exampleModalLabel">Modifier les informations d'emplacement</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <!-- Formulaire ici -->
                                <form action="index.php?ctl=Emplacement&action=modifEmplacement" method="post">
                                    <!-- Ajoutez les champs nÃ©cessaires en fonction de vos besoins -->
                                    <label for="numero">Nom emplacement:</label>
                                    <input type="text" id="numero" name="nom" value="<?php echo $ligne['nom']; ?>" required>
                                    <label for="numero">Nombre casiers:</label>
                                    <input type="text" name="nb" value="<?php echo $ligne['nombre_de_casiers']; ?>" required>
                                    <!-- Ajoutez d'autres champs selon vos besoins -->
                                    <input type="hidden" name="id" value="<?php echo $ligne['id']; ?>">
                                    <button type="submit" class="btn btn-primary">Modifier</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </table>
    </div>
</div>

<!-- JS Bootstrap (optional) -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>