<?php $name = $_POST['name'];

	$email = $_POST['email'];

	$message = $_POST['message'];

	$formcontent="From: $name \n Message: $message";

	$recipient = "owlhollowpub@gmail.com";

	$subject = "Event Request";

	$mailheader = "From: $email \r\n";

	mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

	echo "Thanks, we'll be in touch soon!";


?>