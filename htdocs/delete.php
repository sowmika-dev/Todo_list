<?php
include 'database.php';

if(!isset($_GET['id']))    {
    header("Location: index.php");
    exit;
}
else {
    $id = $_GET['id'];
    $sql = "DELETE FROM tasks WHERE id = $id";
    $result = mysqli_query($conn,$sql);

    if($result){
        header("Location:index.php?deleted=1");
    }
    else {
        header("Location:index.php?deleted=0");
    }
}