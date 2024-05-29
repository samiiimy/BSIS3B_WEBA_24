<?php include PATH . "partials/header.php" ?>

<div class="container mt-5">

  <form action="" method="POST" class="w-50 mx-auto">
    <h2>Task Registration</h2>

    <div class="mb-2">
      <label for="">Task Name</label>
      <input name="task_name" type="text" class="form-control">
    </div>
    <div class="mb-2">
      <label for="">Task Description</label>
      <input name="task_description" type="text" class="form-control">
    </div>
    <div class="mb-2">
    <label for="task_status">Task Status</label>
<select name="task_status" id="task_status" class="form-control">
  <option value="Holding">Holding</option>
  <option value="Prioritized">Prioritized</option>
  <option value="Started">Started</option>
  <option value="Ongoing">Ongoing</option>
  <option value="Complete">Complete</option>
</select>
    </div>
    <div class="mb-2">
      <label for="">Task Due</label>
      <input name="task_due" type="date" class="form-control" value="<?php echo date('Y-m-d'); ?>">
    </div>


    <button type="submit" class="btn btn-primary">Create</button>
  </form>
</div>

<?php include PATH . "partials/footer.php" ?>