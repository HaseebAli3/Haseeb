<?php
    include "connect.php";

    // Check for connection errors


    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $dep = $_POST['Department'];
    $pno = $_POST['pno'];
    $salary = $_POST['salary'];

    // Use prepared statements to prevent SQL injection
    $sql = "INSERT INTO emp1 (name, rollno, dep, pno, salary) VALUES (?, ?, ?, ?, ?)";
    $stmt = $con->prepare($sql);

    // Bind parameters
    $stmt->bind_param("sssss", $name, $rollno, $dep, $pno, $salary);

    // Execute the statement
    if ($stmt->execute()) {
        header("location:index.php");
    } 
?>