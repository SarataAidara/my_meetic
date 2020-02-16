<?php
include "./class/my_meetic.php";
?>

<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="utf-8">
      <meta name="description" content="Site de rencontre" />
      <title>My meetic</title>
      <link rel="stylesheet" type="text/css" href="styleinscription.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   </head>
   <body>
<h2><a href="formulaireconnexion.php">Log in</a></h2>

      <h1> Begin something new again </h1>

      <form id="inscription" action="" method="POST">
         <div class= "form-contain2">
            <div class="form-group">
               <label for="sexe">Enter your Sexe :</label>
               <select type="sexe" name="sexe" class="form-control w-30" id="sexe">
                  <option value="feminin">Féminin</option>
                  <option value="masculin">Masculin</option>
                  <option value="Autres">Autres</option>
               </select>
            </div>
            <div class="form-group">
               <label for="pseudo">Enter your Pseudo :</label>
               <input type="text" name="pseudo" placeholder="Lise75" class="form-control w-30" id="pseudo" value="<?php if(isset($POST['pseudo'])) { echo $POST['pseudo']; } ?>">
            </div>
            <div class="form-group">
               <label for="name">Enter your Name :</label>
               <input type="text" name="name" placeholder="Parker" class="form-control w-30" id="name" value="<?php if(isset($name)) { echo $name; } ?>">
            </div>
            <div class="form-group">
               <label for="firstname">Enter your Firstname :</label>
               <input type="text" name="firstname" placeholder="Lise" class="form-control w-30" id="firstname" value="<?php if(isset($firstname)) { echo $firstname; } ?>">
            </div>
            <div class="form-group">
               <label for="birthdate">Enter your Birthdate :</label>
               <input type="date" name='birthdate' class="form-control w-30" id="birthdate" value="<?php if(isset($birthdate)) { echo $birthdate; } ?>">
            </div>
            <div class="form-group">
               <label for="city">Enter your City :</label>
               <input type="text" name="city" placeholder="New-York" class="form-control w-30" id="city" value="<?php if(isset($city)) { echo $city; } ?>">
            </div>
            <div class="form-group">
               <label for="email">Enter your E-mail :</label>
               <input type="email"  name="email" placeholder="liseparker@mail.com" class="form-control w-30" id="email" value="<?php if(isset($email)) { echo $email; } ?>">
            </div>
            <div class="form-group">
               <label for="email2">Confirm your E-mail :</label>
               <input type="email"  name="email2" placeholder="liseparker@mail.com" class="form-control w-30" id="email2" value="<?php if(isset($email2)) { echo $email2; } ?>">
            </div>
            <div class="form-group">
               <label for="password">Choose a password:</label>
               <input type="password" name="password" placeholder="Enter your password" class="form-control w-30" id="password">
            </div>
            <div class="form-group">
               <label for="password2">Confirm your password:</label>
               <input type="password" name="password2" placeholder="Enter your password2" class="form-control w-30" id="password2">
            </div>
            <button type="submit" name="formulaireinscription" class="btn btn-primary">Inscription</button>
         </div>
      </form>
   </body>
</html>