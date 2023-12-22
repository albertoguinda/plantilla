<?php



$id=$_POST["id"];

$familia=$_POST["familia"];


include("db.php");

        $sql="UPDATE `familias` SET ";
        $sql.="`familia`='".$familia."'";
     
        $sql.=",`updated_at`='".date('Y-m-d h:i:s')."'";
        $sql.=" WHERE id=".$id;
        $mysqli->query($sql);
 


    
    header("location:familias_list.php");

?>