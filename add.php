<?php
$servername="localhost";
$username="root";
$password="";
$dbname="transitivebase";
$conn =new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error)
{
    die("connection failed : ".$conn->connect_error);
}
$pname=$_POST['usr'];
$pdepart=$_POST['dept'];
$pmessage=$_POST['msg'];
$sql = "INSERT INTO addtable (name,department, message) VALUES ('$pname','$pdepart' ,'$pmessage')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>