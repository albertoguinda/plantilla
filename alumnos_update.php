<?php

$id = $_POST["id"];
$id_familias = $_POST["id_familias"];
$id_ciclos = $_POST["id_ciclos"];
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$edad = $_POST["edad"];
$sexo = $_POST["sexo"];

include("db.php");

$sql = "UPDATE `alumnos` SET ";
$sql .= "`id_familias`='".$id_familias."',";
$sql .= "`id_ciclos`='".$id_ciclos."',";
$sql .= "`nombre`='".$nombre."',";
$sql .= "`apellidos`='".$apellidos."',";
$sql .= "`edad`='".$edad."',";
$sql .= "`sexo`='".$sexo."',";
$sql .= "`updated_at`='".date('Y-m-d h:i:s')."'";
$sql .= " WHERE id=".$id;

$mysqli->query($sql);

header("location:alumnos_list.php");

?>
