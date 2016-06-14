<?php
include('config.php');


$task = $_REQUEST['task'];


$sql = "delete from corbeille where id='".$_GET['id']."'";

$query = $mysqli->query($sql);

if (!$query) {
    echo "Erreur lors de la requête : $mysqli->error";
    exit();
}

header('Location: index.php');
exit();
