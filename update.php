<?php
include 'database.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $id = intval($_POST['id']);
    $task_name = $_POST['task_name'];
    $description = $_POST['description'];
    $due_date = $_POST['due_date'];
    $status = $_POST['status'];
    
    $sql = "UPDATE tasks SET
                task_name = '$task_name',
                description = '$description',
                due_date = '$due_date',
                status = '$status'
            WHERE id = $id";

    if(mysqli_query($conn,$sql)) {
        header("Location:index.php?update=1");
        exit();
    }
    else {
        header("Location:index.php?update=0");
    }
}