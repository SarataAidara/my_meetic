<?php

include "database.php";

class connexion extends database{



   public function __construct($email,$password){

      parent::__construct();
      $this->email = $email;
      $this->password = $password;

   }
   
   public function connectUser(){
   
      if (isset($_POST["formulaireconnect"]))
      {
          $mailconnect = htmlspecialchars($_POST['email']);
          $passwordconnect = sha1($_POST['password']);
          if(!empty($mailconnect) AND !empty($passwordconnect))
          {
              $requser = $this->pdo->prepare("SELECT * FROM my_meetic WHERE email = ? AND password = ? ");
              $requser->execute(array( $mailconnect, $passwordconnect));
              $userexist = $requser->rowCount();
              if($userexist == 1)
              {
                  $Userinfo = $requser->fetch();
                  $_SESSION['id_person'] = $Userinfo['id_person'];
                  $_SESSION['pseudo'] = $Userinfo['pseudo'];
                  $_SESSION['email'] = $Userinfo['email'];
                  header("Location: formulaireprofil.php?id_person = ".$_SESSION['id_person']);
      
              }

            else 
            {
               $erreur = "Mauvais mail ou mot de passe !";
            }
         } 
         else
         {
            $erreur = "Tous les champs doivent être complétés !";
         }
      }

   }
}

$connexion = new connexion($_POST['email'],$_POST['password']);
$connexion->connectUser();

?>
