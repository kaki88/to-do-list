<?php
ini_set('display_errors', 1);

date_default_timezone_set('UTC');

$mysqli = new mysqli("localhost", "root", "", "todolist");
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    exit();
}
mysqli_set_charset($mysqli, 'utf8');
$mysqli->query("SET lc_time_names = 'fr_FR'");
