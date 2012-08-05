<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$attending = $_POST['attending'];
$formcontent="From: $email \n Names: $name \n Phone: $phone \n Attending: $attending \n Message: $message";
$recipient = "wedding@jcomingdeer.com";
$subject = "Wedding RSVP";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>