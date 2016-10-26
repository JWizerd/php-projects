<?php
include "db.php";

// GET ids from User Table
function queryUserIds() {
  global $connection;
  $query = "SELECT * FROM users";

  $result = mysqli_query($connection, $query);

  if(!$result) {
    die('query failed.' . mysqli_error($connection));
  }

  while($row = mysqli_fetch_assoc($result)) {
    $user_id = $row['id'];
    echo "<option value='" . $user_id ."'>" .$user_id . "</option>";
  }
}

// CREATE rows in User Table
function createRows() {
  global $connection;
  if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    //prevent sql injections
    $username = mysqli_escape_string($connection, $username);
    $password = mysqli_escape_string($connection, $password);

    //encrpyt user passwords
    $hash_format = "$2$10";

    $salt = "iusesomecrazystrings22";

    $hash_and_salt = $hash_format . $salt;

    $password = crypt($password, $hash_and_salt);

    $connection = mysqli_connect('localhost', 'root', 'root', 'loginapp');

    $query = "INSERT INTO users(username, password)";
    $query .= "VALUES ('$username', '$password')";

    $result = mysqli_query($connection, $query);

    if(!$result) {
      die('query failed.' . mysqli_error());
    } else {
      echo $username . ' successfully added';
    }
  }
}

// READ rows from User Table
function readRows() {
  global $connection;
  $query = "SELECT * FROM users";

  $result = mysqli_query($connection, $query);

  if(!$result) {
    die('query failed.' . mysqli_error($connection));
  }

  while($row = mysqli_fetch_assoc($result)) {
    $user = $row['username'];
    $pass = $row['password'];
    $id_num = $row['id'];

    echo '<pre><h4>' . $user . '</h4><p>' . $pass . '</p><h2>' . $id_num . '</h2></pre>';
  }

}

// UPDATE Tables in User Table
function updateTables() {
  global $connection;
  if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id = $_POST['id'];

    $query = "UPDATE users SET ";
    $query .= "username = '$username', ";
    $query .= "password = '$password' ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);

    if(!$result) {
      die('query failed.' . mysqli_error($connection));
    }
  }
}

// DELETE User in User Table
function deleteUser() {
  global $connection;
  if(isset($_POST['submit'])){
    $id = $_POST['id'];

    $query = "DELETE FROM users ";
    $query .= "WHERE id = $id ";

    $result = mysqli_query($connection, $query);

    if(!$result) {
      die('query failed.' . mysqli_error($connection));
    } else {
      echo '<h2>Successfully DELETED User</h2>';
    }
  }
}
