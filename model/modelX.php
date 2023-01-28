<?php

function recupererDemande($nom,$tel,$localite,$typeDelocal,$mail){

    



        $server='localhost';

        $dbname='test';

        $login='root';

        $password='';

        try {

            $db =new PDO ("mysql:host=$server;dbname=$dbname;charset=utf8",$login,$password);

        } catch (PDOException $e) {

            die('Erreur ici : '.$e->getMessage());

        }

                // insertion des données avec une requette preparer

        // $requet="INSERT INTO user(nom,tel,localite,mail) VALUES(:nom,:tel,:loaclite,:mail)";

        $demande=$db->prepare('INSERT INTO user2(nom,tel,typeDelocal,localite,mail) VALUES(:nom,:tel,:typeDelocal,:localite,:mail)');

        $demande->execute(['nom'=>$nom,'tel'=>$tel,'typeDelocal'=>$typeDelocal,'localite'=>$localite,'mail'=>$mail]);

        $verification = $demande->execute();



        require_once('views/poste/retourPoste.php');

    }