<?php

$id_familias = $_POST["id_familias"];
$id_ciclos = $_POST["id_ciclos"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$edad = $_POST["edad"];
$sexo = $_POST["sexo"];

include("db.php");

$sql = "INSERT INTO `alumnos`(`id`, `id_familias`, `id_ciclos`, `nombre`, `apellidos`, `edad`, `sexo`, `created_at`, `updated_at`) VALUES (";
$sql .= "NULL";
$sql .= ",'".$id_familias."'";
$sql .= ",'".$id_ciclos."'";
$sql .= ",'".$nombre."'";
$sql .= ",'".$apellidos."'";
$sql .= ",'".$edad."'";
$sql .= ",'".$sexo."'";
$sql .= ",'".date('Y-m-d h:i:s')."'";
$sql .= ",'".date('Y-m-d h:i:s')."'";
$sql .= ")";

$mysqli->query($sql);

header("location:alumnos_list.php");

?>
