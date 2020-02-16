<?php
include "database.php";
include "FormError.php";


class my_meetic extends database {

  protected $name;
  protected $pseudo;
  protected $sexe;
  protected $firstname;
  protected $birthdate;
  protected $city;
  protected $email;
  protected $password;

  public function __construct(){

    parent::__construct();
    $this->name = htmlspecialchars($_POST['name']);
    $this->pseudo = htmlspecialchars($_POST['pseudo']);
    $this->sexe = htmlspecialchars($_POST['sexe']);
    $this->firstname = htmlspecialchars($_POST['firstname']);
    $this->birthdate = htmlspecialchars($_POST['birthdate']);
    $this->city = htmlspecialchars($_POST['city']);
    $this->email = htmlspecialchars($_POST['email']);
    $this->email2 = htmlspecialchars($_POST['email2']);
    $this->password = sha1($_POST['password']);
    $this->password2 = sha1($_POST['password2']);
    FormError::erreur();
  }

  public function databaseError(){
    if($this->uniquePseudo() > 0)
    {

        echo "Ce pseudo existe déjà " . PHP_EOL;
        return false;
    }

    if($this->uniqueEmail() > 0)
    {

        echo " Cet e-mail exist déjà " . PHP_EOL;
        return false;
    }

    return true;
  }

  public function validateEmail(){

    if(filter_var($this->email, FILTER_VALIDATE_EMAIL))
    {

      return true;

    }

    else
    {

      echo " Cette Email n'est pas valide " . PHP_EOL;
      return false;
    }
  }
  
  
  public function uniquePseudo(){

    $pseudoreq = $this->pdo->prepare("SELECT * FROM my_meetic WHERE pseudo = ?");
    $pseudoreq->execute(array($this->pseudo));
    return ($pseudoreq->rowCount());
  }

  public function uniqueEmail(){

    $emailreq = $this->pdo->prepare("SELECT * FROM my_meetic WHERE email = ?");
    $emailreq->execute(array($this->email));
    return ($emailreq->rowCount());
  }

  public function inscription(){

    $insertmbr = $this->pdo->prepare( "INSERT INTO my_meetic(pseudo, name, firstname, birthdate, sexe, city, email, password) VALUES(?, ?, ?, ?, ?, ?, ?, ?)");
    $insertmbr->execute(array($this->name, $this->pseudo, $this->sexe, $this->firstname, $this->birthdate, $this->city, $this->email, $this->password));
    $message = " Votre compte a bien été crée " . PHP_EOL;
    echo $message;
  }

  
}

if (sizeof($_POST) > 0) 
{
  $inscription = new my_meetic();

  if ($inscription->databaseError() == true)
  {

    if($inscription->validateEmail() == true)
    {
      if(FormError::erreur()== true)

      $inscription->inscription();

    }
  }
}
?>
