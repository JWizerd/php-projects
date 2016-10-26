<?php

include('db.php');
include('functions.php');

?>

<?php include('_includes/header.php'); ?>

<h1>Your Contacts</h1>
<p><a class="red" href="add_number.php">Add a new contact?</a></p>

<dl><?php renderContacts(); ?></dl>

<?php include('_includes/footer.php'); ?>
