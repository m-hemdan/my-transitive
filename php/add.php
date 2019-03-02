<?php
require('connect.php');
$data=json_decode(file_get_contents("php://input"),true);
$pname=$data['name'];
$pemail=$data['email'];
$pmsg=$data['msg'];
$result="";
if ($pname !='' && $pemail !='')
{
    $sql = "INSERT INTO addtable (name, department, message)
        VALUES ('".$pname."','".$pemail."','".$pmsg."')";

        if (mysqli_query($conn,$sql))
        {
         echo "ok";
        }
        else
        {
         echo "no";
        }
}



?>