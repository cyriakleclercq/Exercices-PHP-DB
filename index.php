<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

// Premiere ligne

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

function ajout ($age,$prenom,$nom) {

    GLOBAL $conn;

    $sql = "INSERT INTO `eleves` VALUES ('','$prenom','$nom','$age')";

    $conn->query($sql);
}

//ajout('30','lubin','meunier');

function affichage () {

GLOBAL $conn;

    $sql = "SELECT * from eleves";

    $result = $conn->query($sql);

    while ($row = $result->fetch_assoc()) {

        echo "Pour l'id = " . $row['id'] . "," . $row['prenom'] . " " . $row['nom'] . " " . $row['age'] . " " . "ans <br>";
    }
}

affichage();

function update ($nom,$prenom,$age,$id) {

    GLOBAL $conn;

    $sql = "UPDATE eleves set nom= '$nom', prenom= '$prenom', age= '$age' where id= $id";
    $conn->query($sql);
}

update('flamant','brian','36','1');


function suppr ($id)
{
    GLOBAL $conn;
    $sql = "DELETE from eleves where id= $id";
    $conn->query($sql);
}

suppr('');








