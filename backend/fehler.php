<?php 

// the message
$msg = $_POST["beschreibung"];

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("info@bettle-trail.ch", "Posten hat ein Problem " . $_POST["posten"],$msg);

?>