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
        <div id="alertDiv"></div>
        <div class="card shadow-sm">
             <div class="card-body">
                <form id="createForm" method="POST" class="form-group">
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

<script>
document.getElementById('createForm').addEventListener('submit', function(e){
    e.preventDefault();

    const task_name = document.getElementById('taskname').value;
    const description = document.getElementById('description').value;
    const due_date = document.getElementById('duedate').value;
    const status = document.getElementById('taskstatus').value;

    fetch('api/tasks.php', {
        method: 'POST',
        body: new URLSearchParams({ task_name, description, due_date, status })
    })
    .then(res => res.json())
    .then(data => {
        const alertDiv = document.getElementById('alertDiv');
        if (data.success) {
            alert(data.message);
            window.location.href = 'index.php';
        } else {
            alertDiv.innerHTML = `
                <div class="alert alert-danger alert-dismissible fade show mt-3" role="alert">
                    ${data.message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            `;
        }
    })
    .catch(err => console.error(err));
});
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
   
</body>
</html>