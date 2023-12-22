<?php

$familia=$_POST["familia"];

include("db.php");

$sql="INSERT INTO `familias`(`id`, `familia`, `created_at`, `updated_at`) VALUES (";
$sql.="NULL";
$sql.=",'".$familia."'";

$sql.=",'".date('Y-m-d h:i:s')."'";
$sql.=",'".date('Y-m-d h:i:s')."'";
$sql.=")";

$mysqli->query($sql);

header("location:familias_list.php");

?>