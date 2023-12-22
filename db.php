<?php
$hostname="localhost";
$port="3306";
$user="root";
$pass="";
$database="examen";

$mysqli = new mysqli($hostname.":".$port, $user, $pass, $database);

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$mysqli->set_charset("utf8");

?>