<?php
require('connect.php');
$sql=("select id,name,department,message,imag from addtable");
$row=array();
$result =mysqli_query($conn,$sql);
      
      while($allData=mysqli_fetch_assoc($result))
      {
       $row[]=$allData;
      }
      
      echo json_encode($row);
    exit; 
?>