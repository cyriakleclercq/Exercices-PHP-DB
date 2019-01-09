<?php
/**
 * Created by PhpStorm.
 * User: Administrateur
 * Date: 09/01/2019
 * Time: 10:44
 */

include "log.php";

// modifier mug


$updatemug = (isset($_GET['upmug']) ? $_GET['upmug']: null);
$idmug = (isset($_GET['idmug']) ? $_GET['idmug']: null);


function updatemug ($updatemug,$idmug) {

    GLOBAL $conn;

    $sql = "UPDATE mugs set description= '$updatemug' where id= '$idmug'";
    $conn->query($sql);
}

updatemug($updatemug,$idmug);