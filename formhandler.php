<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'info@yourwebsite.com'
$email_subject = 'New Form Submission';
$email_body = "Username: $name.\n".
                "User Email: $visitor_email.\n". 
                "Subject: $subject.\n".
                "User Message: $message.\n";
$to = 'alameen.fky@gmail.com';

$headers = "From: $email_from \r\n";
$headers = "Reply-To: visitor_email";

mail($to, $email_subject, $headers);

header("Location: contact.html");


?>