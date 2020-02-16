<?php
include './class/connexion.php';
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="Site de rencontre" />
        <title>Connexion my_meetic</title>
        <link rel="stylesheet" type="text/css" href="styleconnexion.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <h2> Connexion </h2>
                <form id="connexion" action="" method="POST">
                    <div class= "form-contain">
                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" name="email" class="form-control w-30" id="email">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:</label>
                        <input type="password" name="password" class="form-control w-30" id="password">
                    </div>
                    <div class="form-group form-check">
                        <label class="form-check-label">
                        <input class="form-check-input" type="checkbox"> <label>Remember me</label> 
                        </label>
                    </div>
                    <button type="submit" name="formulaireconnect" class="btn btn-primary">Log in</button>
                    </div>
                </form>

    </body>
</html>