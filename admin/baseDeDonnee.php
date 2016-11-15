<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 12/11/2016
 * Time: 14:00
 */


try
{

    $bdd = new PDO('mysql:host=localhost;dbname=lsi3owasp', 'root', '');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}


// cette fonction a pour role d'ajouter un utilisateur

function insertUser($requette){

    global  $bdd, $chaine;

    $sql = $requette;

        if ($bdd->query($sql) == TRUE) {
            $chaine ="Votre compte est bien été créer";
        } else {
            $chaine="Votre inscription n'a pu être effectuée !";
        }


  return $chaine ;

}


// cette fonction a pour role d'ajouter un administrateur

function insertAdmin($requette){

    global  $bdd, $chaine;

    $sql = $requette;

    if ($bdd->query($sql) == TRUE) {
        $chaine ="Votre compte est bien été créer";
    } else {
        $chaine="Votre inscription n'a pu être effectuée !";
    }

    return $chaine ;

}
