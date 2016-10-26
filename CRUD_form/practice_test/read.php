<?php

include('db.php');
include('functions.php');

?>

<?php include('_includes/header.php'); ?>

<h1>Your Contacts</h1>
<p class="lead">view ALL your contacts here</p>
<p><strong class="blue">OR</strong> <a class="red" href="add_number.php">Add a new contact</a></p>

<dl><?php renderContacts(); ?></dl>

<?php include('_includes/footer.php'); ?>
