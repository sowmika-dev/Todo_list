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

    <main class="container mt-5">
        <h1 class="text-center fw-bold mb-3">Edit TASK</h1>
        <div class="card shadow-sm">
             <div class="card-body">
                <form action="update.php" method="POST" class="form-group">
                    <label class="form-label" for="taskName">Task Name</label>
                    <input class="form-control" type="text" name="task_name" id="taskName">

                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control" rows="2" name="description" id="description"></textarea>

                    <label for="due_date">Due Date</label>
                    <input class="form-control" type="date" name="due_date" id="due_date">

                    <label class="form-label" for="taskStatus">Status</label>
                    <select class="form-select mb-5" name="status" id="taskStatus">
                        <option value="pending">Pending</option>
                        <option value="completed">Completed</option>
                    </select>

                    <button class="btn btn-success" type="submit">Update Task</button>

                </form>
             </div>
        </div>
    </main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   
</body>
</html>