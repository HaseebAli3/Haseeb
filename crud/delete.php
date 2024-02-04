<?php
include "connect.php";
if($con){
$id=$_GET['deleteid'];
 $sql="DELETE FROM emp1 WHERE sr=$id";
 $result=mysqli_query($con,$sql);
 if($result){
     header("location:index.php");  
 }
}


?>