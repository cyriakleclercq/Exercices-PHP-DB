<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 14:43
 */

$servername = "localhost";
$username = "";
$password = "";
$dbname = "id7331090_bdd1";
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {

    die("Connection failed: ". $conn->connect_error);

} else {

    // Selectionner la base à utiliser

    $conn->select_db($dbname);
}

// ajout de mug

$mugup = (isset($_GET['mugup']) ? $_GET['mugup']: null);

function ajoutMug ($table,$mugup) {

    GLOBAL $conn;

    $sql = "INSERT INTO $table VALUES (null,'$mugup')";
    $conn->query($sql);
}
ajoutMug('mugs',$mugup);
