


<head>

    <style>

        table{
            font-size: 20px;
            margin-left: 30%;
        }

        td, th {
            background: slategrey;
            color: whitesmoke;
            border:solid black 2px;
            border-radius: 5px;
            margin-right: 10%;
            margin-left: 10%;
            padding-top: 30px;
            padding-bottom: 30px;
            padding-right: 100px;
            padding-left: 100px;
        }

        th {
            background: black;
            color: white;
        }


    </style>
</head>



<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 09/01/2019
 * Time: 09:46
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

// association mug/eleve

$ideleveasso=(isset($_GET['ideleveasso']) ? $_GET['ideleveasso'] : null);
$idmugasso=(isset($_GET['idmugasso']) ? $_GET['idmugasso'] : null);


function affichage1 ($ideleve) {

    GLOBAL $conn;

    $sql = "SELECT eleves.prenom, mugs.description FROM eleves,eleves_mugs, mugs WHERE eleves_mugs.id_eleve = $ideleve AND mugs.id = eleves_mugs.id_mug AND eleves.id = $ideleve";
    $result = $conn->query($sql); ?>

    <body>
        <table>
            <th> Prenom </th>
            <th> Couleur du mug </th>

   <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td>
                    <?= $row['prenom'] ?>
                </td>

                <td>
                    <?= $row['description'] ?>
                </td>
            </tr>
    <?php
}
?>
 </table>
        </body> <?php
}

// association mug/eleve



function asso ($table,$ideleve,$idmug) {

    GLOBAL $conn;

    $sql = "INSERT INTO $table (id_eleve, id_mug) VALUES ('$ideleve','$idmug')";
    $conn->query($sql);
}

asso('eleves_mugs',$ideleveasso,$idmugasso);

affichage1($ideleveasso);