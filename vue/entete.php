<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Container Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
   
   <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #343a40;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: bold;
        }

        .navbar-toggler {
            border: none;
        }

        .navbar-toggler-icon {
            background-color: #fff;
        }

        .navbar-nav {
            margin: 0 auto;
        }

        .nav-item {
            margin: 0 10px;
        }

        .nav-link {
            color: #fff;
            font-weight: 500;
            font-size: 16px;
        }

        .nav-link:hover {
            color: #f8f9fa;
        }

        .container-fluid {
            padding: 0;
        }

        .row {
            margin: 0;
        }

        .bg-dark {
            background-color: #343a40;
            color: #fff;
        }

        h4 {
            margin: 0;
        }
        h5 {
            color: black;
        }
        h6 {
            color: black;
            text-align: left;
        }

        .text-right a {
            color: #fff;
            text-decoration: none;
            font-weight: 500;
        }

        .text-right a:hover {
            color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container-fluid m-0">
        <div class="row bg-dark text-white p-2">
            <div class="col-10">
                <h4 style="font-size: 24px;">Saint-Aspais</h4>			
            </div>
            <div class="col-2 text-right">
                <?php if(!isset($_SESSION['connect'])) { ?>
                <?php } else { ?>
                    <a href="index.php?ctl=connexion&action=deconnecter" class="btn btn-primary">Déconnecter</a>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#email">
                        Profil
                    </button>
                <?php } ?>
                <div class="modal fade" id="email" tabindex="-1" role="dialog">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h5 class="modal-title">Adresse du Compte :</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <h6>
                                <?php
                                	if(isset($_SESSION['email']))
                                    {
                                    echo $_SESSION['email'];
                                    }
                                
                                ?>
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</body><!-- JS Bootstrap (optional) -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>
