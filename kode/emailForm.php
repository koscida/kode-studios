<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$honeypot = $_POST['honeypot'];

$errorNum = 0;
$errors = '';

if(empty($name)) {
	$errors .= '<p class="error">You must enter your <span class="bold">name</span> before sending an email.</p>';
	$errorNum++;
}
if(empty($email)) {
	$errors .= '<p class="error">You must enter your <span class="bold">email</span> before sending an email.</p>';
	$errorNum++;
} else {
	$user = strstr($email, '@', true);
	$domainWhole = strstr($email, '@');
	$domainShort = strstr($domainWhole, '.', true);
	$end = strstr($domainWhole, '.');
	if( strlen($domainShort) <= 1 || strlen($end) <= 1 ) {
		$errors .= '<p class="error">You must enter a <span class="bold">valid email address</span> before sending an email.</p>';
		$errorNum++;
	}
}
if(empty($message)) {
	$errors .= '<p class="error">You must enter a <span class="bold">message</span> before sending an email.</p>';
	$errorNum++;
} elseif(strlen($message) <= 10) {
	$errors .= '<p class="error">Your message must be <span class="bold">longer than 10 characters</span> before sending an email.</p>';
	$errorNum++;
}
if(!empty($honeypot)) {
	$errors .= '<p class="error">The last field must be left blank if you want to send an email.</p>';
	$errorNum++;
}

if($errorNum != 0) {
	echo $errors;
	die();
} else {
	if(mail("kode@kodestudios.com", "Kode Stuiod message from ".$name, $message."    Email: ".$email)) {
		echo '<p class="success">Thank you for contacting us, your email successfully sent. We\'ll be in touch as soon as possible.</p>';
		die();
	} else {
		echo '<p class="error">An error occurred, please try again.  If the problem persists, you can email us directly at kode@kodestudios.com</p>';
		die();
	}
}

echo '<p class="error">An error occurred, please try again.  If the problem persists, you can email us directly at kode@kodestudios.com</p>';
die();
