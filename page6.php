<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 09/01/2019
 * Time: 10:44
 */

$servername = "localhost";
$username = "id7331090_cyriak";
$password = "!Modjo040691";
$dbname = "id7331090_bdd1";
$conn = new mysqli($servername, $username, $password);

if ($conn->connect_error) {

    die("Connection failed: ". $conn->connect_error);

} else {

    // Selectionner la base à utiliser

    $conn->select_db($dbname);
}

// modifier mug


$updatemug = (isset($_GET['upmug']) ? $_GET['upmug']: null);
$idmug = (isset($_GET['idmug']) ? $_GET['idmug']: null);


function updatemug ($updatemug,$idmug) {

    GLOBAL $conn;

    $sql = "UPDATE mugs set description= '$updatemug' where id= '$idmug'";
    $conn->query($sql);
}

updatemug($updatemug,$idmug);