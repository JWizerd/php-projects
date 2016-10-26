<?php

  include('db.php');
  include('functions.php');

  // grab the id of the user in the database. based off that id update the username and password

  updateTables();

?>

<?php include('_includes/header.php'); ?>

  <form action="login_update.php" method="post">

      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" name="username" class="form-control" required>
      </div>

       <div class="form-group">
        <label for="password">Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>

      <div class="form-group">
        <select name="id">
          <?php queryUserIds(); ?>
        </select>
     </div>

    <input class="btn btn-primary" type="submit" name="submit" value="Submit">

  </form>

<?php include('_includes/footer.php'); ?>
