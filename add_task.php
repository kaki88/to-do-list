<?php
include('config.php');


$task = $_REQUEST['task'];
$date = $_REQUEST['date'];
$cat = $_REQUEST['cat'];
$priority = $_REQUEST['priority'];
$descr = $_REQUEST['description'];


$sql = "INSERT INTO 
      taches(titre, date, id_categories, etat, description) 
      VALUES ('$task','$date','$cat','$priority', '".addslashes($descr)."')";

$query = $mysqli->query($sql);

if (!$query) {
    echo "Erreur lors de la requête : $mysqli->error";
    exit();
}

header('Location: index.php');
exit();
