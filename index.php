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
                                <td>1</td>
                                <td>Sample task</td>
                                <td>This is a sample task</td>
                                <td>2025-12-02</td>
                                <td><span class="badge bg-warning text-dark">Pending</span></td>
                                <td>
                                    <a href="edit.php?ID=1" class="btn btn-primary btn-sm me-2">Edit</a>
                                    <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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
                        <button type="button" class="btn btn-danger" id="confirmDelete">Delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   
</body>
</html>