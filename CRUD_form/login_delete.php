<?php

  include('db.php');
  include('functions.php');

  // grab the id of the user in the database. based off that id update the username and password
  deleteUser();

?>

<?php include('_includes/header.php'); ?>
  <h2>DELETE USER</h2>
  <form action="login_delete.php" method="post">

      <div class="form-group">
        <select name="id">
          <?php queryUserIds(); ?>
        </select>
     </div>

    <input class="btn btn-primary" type="submit" name="submit" value="Submit">

  </form>

<?php include('_includes/footer.php'); ?>
