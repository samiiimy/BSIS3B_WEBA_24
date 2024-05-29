<?php include PATH . "partials/header.php" ?>

<div class="container mt-5">

  <form action="" method="POST" class="w-50 mx-auto">
    <h2>Delete Task</h2>

    <div class="mb-2">
      <label for="">Task Name</label>
      <input name="task_name" disabled value="<?= $tasks->task_name ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Task Description</label>
      <input name="task_description" disabled value="<?= $tasks->task_description ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Task Status</label>
      <input name="task_status" disabled value="<?= $tasks->task_status ?>" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Task Due</label>
      <input name="task_due" disabled value="<?= $tasks->task_due ?>" type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>">
    </div>

    <input type="hidden" value="<?= $tasks->id ?>" name="id">
    <button type="submit" class="btn btn-danger">Delete</button>
  </form>
</div>

<?php include PATH . "partials/footer.php" ?>