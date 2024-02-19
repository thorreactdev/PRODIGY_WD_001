<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject= $_POST['subject'];
$message = $_POST['message'];

$email_from = "vinayprajapati9324@gmail.com";
$email_subject = "New form Submission";
$email_body ="User Name : $name \n".
            "User Email : $visitor_email \n".
            "Subject : $subject \n".
            "User message :$message \n";

$to = "vinayprajapati1404@gmail.com";
$headers= "From : $email_from \r\n";
$headers .= "Reply-To : $visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Loaction : contact.html");
               
?>