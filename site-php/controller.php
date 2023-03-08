<?php 
require_once 'Connexion.php';
require_once 'Personne.php';

$connexion = new Connexion();

$personne = new Personne("mad@max.fr", '$argon2i$v=19$m=65536,t=4,p=1$THJ1eUZ4QmM2SmtIak9ndQ$+ma6331tto+K3ncmPx7iXOGLVSItrRU0hJBXXRSCvAI');

$connexion->verifierUtilisateur($personne->getEmail(), $personne->getMdp(), $_POST['email'], $_POST['mdp']);




