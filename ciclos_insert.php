<?php

$id_familias = $_POST["id_familias"];
$ciclo = $_POST["ciclo"];

include("db.php");

$sql = "INSERT INTO `ciclos`(`id`, `id_familias`, `ciclo`, `created_at`, `updated_at`) VALUES (";
$sql .= "NULL";
$sql .= ",'".$id_familias."'";
$sql .= ",'".$ciclo."'";
$sql .= ",'".date('Y-m-d h:i:s')."'";
$sql .= ",'".date('Y-m-d h:i:s')."'";
$sql .= ")";

$mysqli->query($sql);

header("location:ciclos_list.php");

?>
