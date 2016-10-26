<?php

include('db.php');

$query = "SELECT * FROM contacts";

$result = mysqli_query($connection, $query);

if(!$result) {
  die('error establishing database');
}

?>

<?php include('_includes/header.php'); ?>

<h1>Your Contacts</h1>
<p class="lead">view ALL your contacts here</p>
<p><strong class="blue">OR</strong> <a class="red" href="add_number.php">Add a new contact</a></p>

<dl>
  <?php
    while($contacts = mysqli_fetch_assoc($result)) {
      echo '<dt>' . $contacts['name'] . '</dt>' .
           '<dd>' . $contacts['phone'] . '</dd>';
    }
  ?>
</dl>

<?php include('_includes/footer.php'); ?>
