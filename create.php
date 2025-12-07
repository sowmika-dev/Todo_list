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
        <h1 class="text-center fw-bold mb-3">CREATE TASK</h1>
        <div class="card shadow-sm">
             <div class="card-body">
                <form action="store.php" method="POST" class="form-group">
                    <label class="form-label" for="taskname">Task Name</label>
                    <input class="form-control" type="text" name="task_name" id="taskname">

                    <label class="form-label" for="description">Description</label>
                    <textarea class="form-control" rows="2" name="description" id="description"></textarea>

                    <label for="duedate">Due Date</label>
                    <input class="form-control" type="date" name="due_date" id="duedate">

                    <label class="form-label" for="taskstatus">Status</label>
                    <select class="form-select mb-5" name="status" id="taskstatus">
                        <option value="Pending">Pending</option>
                        <option value="In Progress">In Progress</option>
                        <option value="Completed">Completed</option>
                    </select>

                    <button class="btn btn-success" 
                    type="submit">Add Task</button>

                </form>
             </div>
        </div>
    </main>

    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-dark text-success">
                    <h5 class="fw-bold" id="successModalLabel">Success!</h5>
                </div>
                <div class="modal-body bg-white text-dark">
                    <p class="fw-lead">
                        Task added successfully...
                    </p>
                </div>
                <div class="modal-footer">
                    <a href="index.php" class="btn btn-success btn-sm">OK</a>
                </div>
            </div>

        </div>

    </div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php
if (isset($_GET['success'])) { ?>
<script>
    let modal = new bootstrap.Modal(document.getElementById('successModal'));
    modal.show();
</script>
     
<?php } ?>
   
</body>
</html>