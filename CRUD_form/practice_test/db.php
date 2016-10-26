<?php

$connection = mysqli_connect('localhost', 'root', 'root', 'contact_list');

if(!$connection) {
  die('Error establishing database connection');
}
