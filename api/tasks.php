<?php

header("Content-Type: application/json");
include '../database.php';

$method = $_SERVER['REQUEST_METHOD'];

switch($method) {

case 'POST':
    if (isset($_GET['id'])) {
        $id = intval($_GET['id']);
        $task_name = mysqli_real_escape_string($conn, $_POST['task_name']);
        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $due_date = $_POST['due_date'];
        $status = $_POST['status'];

        $sql = "UPDATE tasks SET 
                    task_name='$task_name', 
                    description='$description', 
                    due_date='$due_date', 
                    status='$status' 
                WHERE id=$id";

        if (mysqli_query($conn, $sql)) {
            echo json_encode([
                "success" => true,
                "message" => "Task updated successfully",
                "id" => $id
            ]);
        } else {
            echo json_encode([
                "success" => false,
                "message" => "Failed to update task"
            ]);
        }
    } 
    else {
        echo json_encode([
            "success" => false,
            "message" => "ID missing for update"
        ]);
    }
    break;

case 'DELETE' :

    if (!isset($_GET['id'])) {
        echo json_encode([
            'success' => false,
            'message' => "Task id is required"
        ]);
        exit;
    }

    $id = intval($_GET['id']);

    if ($id <= 0) {
        echo json_encode([
            'success' => false,
            'message' => "Invalid Task ID"
        ]);
        exit;
    }

    $sql = "DELETE FROM tasks WHERE id = $id";
    $result = mysqli_query($conn,$sql);

    if($result && mysqli_affected_rows($conn)>0)
    {
        echo json_encode([
            "success" => true,
            "message" => "Task deleted successfully",
            "id" => $id
        ]);
    }
    else {
        echo json_encode([
            "success" => false,
            "messege" => "Task not found or already deleted"
        ]);
    }
        break;

default:
        echo json_encode([
            "success" => false,
            "message" => "Method not allowed"
        ]);
        break;    
}
