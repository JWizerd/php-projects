<?php

include('db.php');
include('functions.php');
addNumber();

?>

<?php include('_includes/header.php'); ?>
  <h1>Contact Book</h1>
  <p>Enter the name of your friend and their phone number</p>
  <p><strong class="blue">OR</strong> <a class="red" href="read.php">View your contacts</a></p>
  <form action="add_number.php" method="post">
    <input type="text" name="name" placeholder="name">
    <input type="tel" name="phone" placeholder="phone number">
    <input type="submit" name="submit" class="btn btn-primary">
  </form>
<?php include('_includes/footer.php'); ?>
