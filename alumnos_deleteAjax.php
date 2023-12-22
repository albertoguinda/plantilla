<?php
include 'db.php';

if(isset($_POST['id'])){
    $id = $_POST['id'];
    $sql = "DELETE FROM alumnos WHERE id = ?";
    $stmt = $mysqli->prepare($sql);
    $stmt->bind_param('i', $id);
    if($stmt->execute()){
        echo 'success';
    } else {
        echo 'error';
    }
    $stmt->close();
}
?>
