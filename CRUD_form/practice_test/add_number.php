<?php

include("db.php");

if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];

  $query = "INSERT INTO contacts(name, phone)";
  $query .= "VALUES ('$name', '$phone')";

  $result = mysqli_query($connection, $query);

  if(!$result) {
    die('error establishing database connection');
  } else {
    echo '<h2>Friend: ' . $name . '</br><h3>Phone: ' . $phone . '</h3>';

    echo '<h2 class="blue"><strong>Successfully</strong> added to Contact List</h2>';
  }
}

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
