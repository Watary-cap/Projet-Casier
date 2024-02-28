<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Assurez-vous d'inclure les liens vers Bootstrap et Font Awesome -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
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
                    <th>Visualisation</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php foreach ($data as $ligne) { ?>
                <tr>
                    <td><?php echo $ligne['id_emp']; ?></td>
                    <td><?php echo $ligne['nom']; ?></td>
                    <td><?php echo $ligne['nombre_de_casiers']; ?></td>
                    <td>
                        <a class="nav-link" href="index.php?ctl=Emplacement&action=listCasier&idemp=<?php echo $ligne['id_emp']; ?>">Visualisation</a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $ligne['id_emp']; ?>">
                            Modifier
                        </button>
                    </td>
                </tr>
                <!-- Modal pour la modification -->
                <div class="modal fade" id="myModal<?php echo $ligne['id_emp']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <!-- Ajoutez les champs nécessaires en fonction de vos besoins -->
                                    <label for="numero">Nom emplacement:</label>
                                    <input type="text" id="numero" name="nom" value="<?php echo $ligne['nom']; ?>" required>
                                    <label for="numero">Nombre casiers:</label>
                                    <input type="text" name="nb" value="<?php echo $ligne['nombre_de_casiers']; ?>" required>
                                    <!-- Ajoutez d'autres champs selon vos besoins -->
                                    <input type="hidden" name="id" value="<?php echo $ligne['id_emp']; ?>">
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

<!-- Assurez-vous d'inclure les liens vers Bootstrap et jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

</body>
</html>