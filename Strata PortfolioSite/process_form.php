<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "shayfred.lee@gmail.com"; // Replace with your email address
    $subject = "New Message from $name";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);

    
}
?>
