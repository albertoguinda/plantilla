<?php

$id = $_POST["id"];
$id_familias = $_POST["id_familias"];
$ciclo = $_POST["ciclo"];

include("db.php");

$sql = "UPDATE `ciclos` SET ";
$sql .= "`id_familias`='".$id_familias."',";
$sql .= "`ciclo`='".$ciclo."',";
$sql .= "`updated_at`='".date('Y-m-d h:i:s')."'";
$sql .= " WHERE id=".$id;
$mysqli->query($sql);

header("location:ciclos_list.php");

?>
