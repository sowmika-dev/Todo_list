<?php
include 'database.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To do</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid d-flex justify-content-between align-items-center">
                <a class="navbar-brand"  href="#">ToDo App</a>
                <a href="create.php" class="btn btn-success">Add Task</a>
            </div>
        </nav>
    </header>
       

    <main class="container mt-4 mb-5">
        <h1 class="fw-bold text-center mb-4">All Tasks</h1>
        <div class="card rounded shadow-sm">
            <div class="card-body p-3">
                <div class="table-responsive">
                    <table class="table table-hover table-striped">
                        <? 
                            $sql = "SELECT * FROM tasks ORDER BY id ";
                            $result = mysqli_query($conn,$sql);

                            if (mysqli_num_rows($result)>0) {
                        ?>
                        <thead class="table-dark">
                            <tr>
                                <th>ID</th>
                                <th>Task Name</th>
                                <th>Description</th>
                                <th>Due date</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <? while ($row = mysqli_fetch_assoc($result)) : ?>
                                <td><? echo $row['id'] ?></td>
                                <td><? echo $row['task_name'] ?></td>
                                <td><? echo $row['description'] ?></td>
                                <td><? echo $row['due_date'] ?></td>
                                <td><span class="badge bg-warning text-dark"><? echo $row['status'] ?></span></td>
                                <td>
                                    <a href="edit.php?id=<?= $row['id'] ?>" class="btn btn-primary btn-sm me-2">Edit</a>
                                    <button 
                                        class="btn btn-danger btn-sm delete-btn"
                                        data-id="<?= $row['id'] ?>"
                                        data-bs-toggle="modal"
                                        data-bs-target="#deleteModal">Delete
                                    </button>

                                </td>
                            </tr>
                                <? endwhile;  ?>
                        </tbody>
                    </table>
                </div>
            </div>
                             <? } else { ?>
                                    <div class="text-center">
                                        <h2 class=" mt-4 fw-secondary text-center mb-4">No tasks found!</h2>
                                        <a href="create.php" class="btn btn-primary">Let's get started</a>
                                    </div>   
                             <? } ?>
        </div>
    </main>
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="deleteModalLabel">Confirm delete</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete this task?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel
                    </button>
                    <button class="btn btn-danger" id="confirmDeleteBtn">Delete</button>
                </div>
            </div>
        </div>
    </div>
    
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

 <script>
    let deleteId = null;

    document.querySelectorAll('.delete-btn').forEach(button => {
        button.addEventListener('click',function(){
            deleteId = this.getAttribute('data-id');
        });
    });

    document.getElementById('confirmDeleteBtn').addEventListener('click',function() {
        fetch(`api/tasks.php?id=${deleteId}`,{
            method:'DELETE'
        })
        .then(response => response.json())
        .then(data => {
            if (data.success){
                alert(data.message);
                location.reload();
            } else {
                alert(data.message)
            }
        })
        .catch(err => console.error(err));
    });
 </script>
   
</body>
</html>