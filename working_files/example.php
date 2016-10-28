<?php
  $file = 'created_file.php';
  //fopen creates files if they haven't already been created
  $handle = fopen($file, 'w');

  fclose($handle);

?>
