<?php

class Connexion{

    public function verifierUtilisateur($email, $mdp, $emailSaisi, $mdpSaisi){


        if($emailSaisi == $email && password_verify($mdpSaisi, $mdp))
        {
            header('Location: dashboard.php');
            die();
        }
        else{
            header('Location: index.php');
            die();
        }


        
    }


}