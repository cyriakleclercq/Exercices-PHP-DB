<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 13:51
 */

include "log.php";

// ajout eleve

$age = (isset($_GET['age']) ? $_GET['age'] : null);
$prenom =(isset($_GET['prenom']) ? $_GET['prenom']: null);
$nom = (isset($_GET['nom']) ? $_GET['nom']: null);


function ajout ($age,$prenom,$nom,$table) {

    GLOBAL $conn;

    $stmt = $conn-> prepare("INSERT INTO $table VALUES (null ,'$prenom','$nom','$age')");

    $stmt-> bind_param("ssi",$prenom,$nom,$age);

    $stmt-> execute();

    $stmt -> close();
}

ajout($age, $prenom, $nom,'eleves');