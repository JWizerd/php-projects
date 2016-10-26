<?php
include('db.php');

function renderContacts() {
  global $connection;

  $query = "SELECT * FROM contacts";

  $result = mysqli_query($connection, $query);

  if(!$result) {
    die('error establishing database');
  }

  while($contacts = mysqli_fetch_assoc($result)) {
    echo '<dt>' . $contacts['name'] . '</dt>' .
         '<dd>' . $contacts['phone'] . '</dd>';
  }
}

function addNumber() {
  global $connection;
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
}
