<?php
include('config.php');

$id = $_GET['id'];


$sql = "INSERT INTO corbeille SELECT * FROM taches where id='$id'";
$sqll = "DELETE FROM taches where id='$id'";





$query = $mysqli->query($sql);
$querry = $mysqli->query($sqll);
if (!$query) {
    echo "Erreur lors de la requête : $mysqli->error";
    exit();
}

header('Location: index.php');
exit();
