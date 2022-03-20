<?php
$to_email = "recipient@gmail.com";
$subject = "test mail";
$body = "hellow";
$headers = "From: your-gmail@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}


?>
