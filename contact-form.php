<?php
    $name = $_Post['name'];
    $visitor_email = $_Post['email'];
    $message = $_POST['message'];

    $email_from = 'vnjonge@yahoo.com';
    $email_subject = "New enquiry from Portfolio";
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                    "User Message: $message.\n";

    $to = "vnjonge@hotmail.com";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email\r\n";
    mail($to, $email_subject, $email_body, $headers);
    header("location: index.html");
?>
