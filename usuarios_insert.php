<?php

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

$sql = "INSERT INTO `usuarios`(`id`, `nombre`, `apellido`, `correo_electronico`, `nombre_usuario`, `contraseña`, `telefono`, `codigo_postal`, `fecha_creacion`, `fecha_modificacion`, `ultimo_acceso`, `estado`, `preferencias`, `cortes_pelo`, `cortes_barba`, `rol`) VALUES (NULL, :nombre, :apellido, :correo_electronico, :nombre_usuario, :contraseña, :telefono, :codigo_postal, :fecha_creacion, :fecha_modificacion, :ultimo_acceso, :estado, :preferencias, :cortes_pelo, :cortes_barba, :rol)";

$stmt = $pdo->prepare($sql);

$stmt->execute([
    'nombre' => $nombre,
    'apellido' => $apellido,
    'correo_electronico' => $correo_electronico,
    'nombre_usuario' => $nombre_usuario,
    'contraseña' => $contraseña,
    'telefono' => $telefono,
    'codigo_postal' => $codigo_postal,
    'fecha_creacion' => date('Y-m-d h:i:s'),
    'fecha_modificacion' => date('Y-m-d h:i:s'),
    'ultimo_acceso' => date('Y-m-d h:i:s'),
    'estado' => $estado,
    'preferencias' => $preferencias,
    'cortes_pelo' => $cortes_pelo,
    'cortes_barba' => $cortes_barba,
    'rol' => $rol
]);

header("location:usuarios_list.php");

?>
