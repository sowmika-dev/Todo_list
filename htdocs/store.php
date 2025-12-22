<?php
include 'database.php';

if($_SERVER['REQUEST_METHOD']!=='POST') {
    header('Location:create.php');
    exit;
}
else {
    $taskname = $_POST['task_name'];
    $description = $_POST['description'];
    $duedate = $_POST['due_date'];
    $status = $_POST['status'];

    $sql = "INSERT INTO tasks (task_name,description,due_date,status)
            VALUES ('$taskname','$description','$duedate','$status')";

    $result = mysqli_query($conn,$sql);
    if($result) { 
        header('Location:index.php?success=1');
        exit;
    }
    else {
        header('Location:index.php?error=1');
        exit;
    }
}