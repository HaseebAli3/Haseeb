<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include "connect.php";
    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $dep = $_POST['Department'];
    $pno = $_POST['pno'];
    $salary = $_POST['salary'];
    $id=$_GET['id'];
    
    $sql = "UPDATE emp1 SET name='$name',rollno='$rollno', dep='$dep', pno='$pno', 
    salary='$salary' WHERE 'sr'=$id";
    if ($con->query($sql)) {
        header("location: index.php");
    }
}else{
    die("Transfer method is not safe");
}
?>