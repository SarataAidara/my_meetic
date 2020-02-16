<?php
include "./class/profil.php";
?>

<?php



$profil = new profilAcces();
// $profil->getUserinfo();
$profil->profil();

?>

<html>
   <head>
      <title>Profil my_meetic</title>
      <meta charset="utf-8">
   </head>
   <body>

      <div align="center">
         <?php $Userinfo = $profil->getUserinfo() ;

         echo $Userinfo;
         ?>
         <h2>Profil de <?php echo $Userinfo['pseudo']; ?></h2>
         <br /><br />
         Pseudo = <?php echo $Userinfo['pseudo']; ?>
         <br />
         Name = <?php echo $Userinfo['name']; ?>
         <br />
         Firstname = <?php echo $Userinfo['firstname']; ?>
         <br />
         Birthdate = <?php echo $Userinfo['birthdate']; ?>
         <br />
         City = <?php echo $Userinfo['city']; ?>
         <br />
         Email = <?php echo $Userinfo['email']; ?>
         <br />
         <br />
         <a href="editionprofil.php">Editer mon profil</a>
         <a href="deconnexion.php">Se déconnecter</a>
      </div>
   </body>
</html>
