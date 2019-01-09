<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 09/01/2019
 * Time: 13:37
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