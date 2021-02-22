<?php $name = $_POST['name'];

$email = $_POST['email'];

$message = $_POST['message'];

$formcontent="From: $Name \n Message: $Message";

$recipient = "owlhollowpub@gmail.com";

$subject = "Event Request";

$mailheader = "From: $Email \r\n";

mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

echo "Thanks, we'll be in touch soon!";


?>