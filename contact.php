<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

mail("yourmail@gmail.com", "Portfolio Contact",
"Name: $name\nEmail: $email\n\n$message");

header("Location: success.html");
?>
