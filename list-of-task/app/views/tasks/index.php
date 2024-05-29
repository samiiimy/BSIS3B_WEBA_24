<?php include PATH . "partials/header.php" ?>

<div class="container mt-5">

  <div class="d-flex justify-content-between align-items-center">

    <h2>List of Tasks</h2>
    <a href="<?= ROOT ?>/tasks/create" class="btn btn-primary">Add New</a>

  </div>

  <table class="table table-striped table-bordered mt-3">
    <tr>
      <th>Task Name</th>
      <th>Task Description</th>
      <th>Task Status</th>
      <th>Task Due</th>
    </tr>
    <?php if ($tasks != null) { ?>
      <?php foreach ($tasks as $item) { ?>
        <tr>
          <td><?= $item->task_name ?></td>
          <td><?= $item->task_description ?></td>
          <td><?= $item->task_status ?></td>
          <td><?= $item->task_due ?></td>
          <td>
            <a href="<?= ROOT ?>/tasks/edit/<?= $item->id ?>" class="btn btn-success btn-sm">Edit</a>
            <a href="<?= ROOT ?>/tasks/delete/<?= $item->id ?>" class="btn btn-danger btn-sm">Delete</a>
          </td>
        </tr>
      <?php } ?>
    <?php } else { ?>
      <tr>
        <td colspan="3">
          <h2>No record found.</h2>
        </td>
      </tr>
    <?php } ?>
  </table>
</div>

<?php include PATH . "partials/footer.php" ?>