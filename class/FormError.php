<?php

class FormError extends database{

    
    public static function erreur(){


        if(!isset($_POST["formulaireinscription"]))
        {
    
            echo " Tous les champs doivent être completés" . PHP_EOL;
            return false;
        }
    
        if (empty($_POST['sexe'])
            OR empty($_POST['pseudo'])
            OR empty($_POST['name'])  
            OR empty($_POST['firstname']) 
            OR empty($_POST['birthdate']) 
            OR empty($_POST['city']) 
            OR empty($_POST['email']) 
            OR empty($_POST['email2']) 
            OR empty($_POST['password'])
            OR empty($_POST['password2']))
        {
    
            echo " Veuillez remplir les champs";
            return false;

        }

            $namelength = strlen($_POST['name']);

            if ($namelength > 55)
            {
        
                echo " Votre nom ne doit pas dépasser 55 caractrères" . PHP_EOL;
                return false;
            }

            $pseudolength = strlen($_POST['pseudo']);

            if ($pseudolength > 55)
            {
        
                echo " Votre pseudo ne doit pas dépasser 55 caractrères" . PHP_EOL;
                return false;
            }
        
            if($_POST['email'] !== $_POST['email2'])
            {
                
                echo "Les adresses mails ne correspondent pas" . PHP_EOL;
                return false;
            }
            
            if($_POST['password'] !== $_POST['password2'])
            {
        
                echo " Vos mots de passe ne correspondent pas" . PHP_EOL;
                return false;
            }

            if ((new \DateTime())->diff(new \DateTime($_POST['birthdate']))->format('%y') < 18)
            {
                echo "Vous devez être majeur pour vous inscrire";  
                return false;  
            }
        return true;



    }
}
