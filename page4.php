<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 08/01/2019
 * Time: 14:43
 */

include "log.php";

// ajout de mug

$mugup = (isset($_GET['mugup']) ? $_GET['mugup']: null);

function ajoutMug ($table,$mugup) {

    GLOBAL $conn;

    $stmt = $conn->prepare("INSERT INTO $table VALUES (null,'$mugup')");

    $stmt -> bind_param("s");

    $stmt -> execute();

    $stmt -> close();
}
ajoutMug('mugs',$mugup);
