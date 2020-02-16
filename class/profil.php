<?php

include 'database.php';

class profilAcces extends database{

    public $Userinfo;

    public function profil(){

        if(isset($_GET['id_person']) AND $_GET['id_person'] > 0)
        {
            $getid = intval($_GET['id_person']);
            $requser = $this->pdo->prepare('SELECT * FROM my_meetic WHERE id_persone = ?');
            $requser->execute(array($getid));
            $this->Userinfo = $requser->fetch();

        }

        else
        {

        }
    }


    public function getUserinfo(){

        return $this->Userinfo;
    }
}