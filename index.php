<?php
$to_email = "gajjjar22@gmail.com";
$subject = "test mail";
$body = "hellow";
$headers = "From: gajjjar22@gmail.com";

if (mail($to_email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}


?>