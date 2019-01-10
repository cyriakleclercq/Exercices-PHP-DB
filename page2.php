

<head>

<style>

    table{
        font-size: 20px;
        margin-left: 20%;
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
 * Date: 07/01/2019
 * Time: 15:51
 */

include "log.php";

// affichage

function affichage () {

    GLOBAL $conn;

    $sql = "SELECT * from eleves";

    $result = $conn->query($sql); ?>
 <body>
        <table>
            <th> ID </th>
            <th> Prénom </th>
            <th> Nom </th>
            <th> Age </th>
   <?php while ($row = $result->fetch_assoc()) { ?>

            <tr>
                <td>
                    <?= $row['id'] ?>
                </td>
                <td>
                    <?= $row['prenom'] ?>
                </td>

                <td>
                    <?= $row['nom'] ?>
                </td>

                <td>
                    <?= $row['age'] ?>
                </td>
            </tr>

<?php
    }
    ?>
     </table>
        </body> <?php
}

//  supprimer

$idsuppr = (isset($_GET['idsuppr']) ? $_GET['idsuppr'] : null);

function suppr ($idsuppr)
{
    GLOBAL $conn;
    $sql = "DELETE from eleves where id= $idsuppr";
    $conn->query($sql);
}

    suppr($idsuppr);

// modifier

$nomup = (isset($_GET['nomup']) ? $_GET['nomup']: null);
$prenomup = (isset($_GET['prenomup']) ? $_GET['prenomup']: null);
$ageup = (isset($_GET['ageup']) ? $_GET['ageup']: null);
$idup = (isset($_GET['idup']) ? $_GET['idup']: null);

function update ($nom,$prenom,$age,$id) {

    GLOBAL $conn;

    $sql = "UPDATE eleves set nom= '$nom', prenom= '$prenom', age= '$age' where id= '$id'";
    $conn->query($sql);
}

    update($nomup, $prenomup, $ageup, $idup);


affichage ();
?>



