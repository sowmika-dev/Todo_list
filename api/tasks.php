<?php

header("Content-Type: application/json");
include '../database.php';

$method = $_SERVER['REQUEST_METHOD'];

switch($method) {

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
