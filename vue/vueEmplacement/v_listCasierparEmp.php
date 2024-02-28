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
            <div class="container-fluid">
                <h4><?php echo $data2['nom'];?></h4>
                <div class="row d-inline-flex">
                    <?php foreach ($data as $ligne) { ?>
                        <!-- Gallery Item 6 -->
                        <div class="col-1  p-2">
                            <div class="card h-100">
                                <h4 class="card-title text-center"><?php echo $ligne['numero'];?></h4>
                                <p class="card-text">
                                    <?php echo $ligne['statut'];?>
                                </p>
                                <a href="#" class="btn btn-primary" onclick="showPopup('test')">voir</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </table>
    </div>
</div>

<!-- Assurez-vous d'inclure les liens vers Bootstrap et jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

<script>
    function showPopup(numero, statut) {
        // Utilisez ici une méthode de votre choix pour afficher une pop-up
        // Par exemple, avec JavaScript, vous pouvez utiliser la fonction `alert` :
        alert("Numéro: " + numero + "\nStatut: " + statut);
    }
</script>

</body>
</html>
