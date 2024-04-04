<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$name = $_POST['name'];

$email = $_POST['email'];

$message = $_POST['message'];

$fav_language = $_POST['html'];

$fav_language = $_POST['javascript'];

$fav_language = $_POST['css'];

$cars = $_POST['cars'];

$to = 'marvelarafat@gmail.com'; // Replace with your email address

$subject = 'New form submission';

$body = "Name: $name\nEmail: $email\nMessage: $message";

if (mail($to, $subject, $body)) {

echo "Thank you for your message!";

} else {

echo "Message couldnot be sent. One or More Required Fields are Missing.";

}

}

?>