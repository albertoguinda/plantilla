<?php

$id = $_POST["id"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo_electronico = $_POST["correo_electronico"];
$nombre_usuario = $_POST["nombre_usuario"];
$contraseña = $_POST["contraseña"];
$telefono = $_POST["telefono"];
$codigo_postal = $_POST["codigo_postal"];
$estado = $_POST["estado"];
$preferencias = $_POST["preferencias"];
$cortes_pelo = $_POST["cortes_pelo"];
$cortes_barba = $_POST["cortes_barba"];
$rol = $_POST["rol"];

include("db.php");

$sql = "UPDATE `usuarios` SET ";
$sql .= "`nombre`='".$nombre."'";
$sql .= ",`apellido`='".$apellido."'";
$sql .= ",`correo_electronico`='".$correo_electronico."'";
$sql .= ",`nombre_usuario`='".$nombre_usuario."'";
$sql .= ",`contraseña`='".$contraseña."'";
$sql .= ",`telefono`='".$telefono."'";
$sql .= ",`codigo_postal`='".$codigo_postal."'";
$sql .= ",`estado`='".$estado."'";
$sql .= ",`preferencias`='".$preferencias."'";
$sql .= ",`cortes_pelo`=".$cortes_pelo;
$sql .= ",`cortes_barba`=".$cortes_barba;
$sql .= ",`rol`='".$rol."'";
$sql .= ",`updated_at`='".date('Y-m-d h:i:s')."'";
$sql .= " WHERE id=".$id;
$mysqli->query($sql);

header("location:usuarios_list.php");

?>
