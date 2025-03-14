<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$mailTo = 'bridgej161@gmail.com';
	$subject = 'New message from contact form';
	$headers = 'From: ' . $email . "\r\n";
	$txt = "You have received an email from " . $name . ".\r\n\n" . $message;

	mail($mailTo, $subject, $txt, $headers);
	header("Location: contact-form-handler.php?mailsent");
	exit();
?>
