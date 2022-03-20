<?php
  $to = "recipient@gmail.com";
  $subjetc = "Test Email";
  $body = "Hi this is a test email send by a php script";
  $headers = "From: YourGmailId@gmail.com";

  if (mail($to, $subjetc, $body, $headers)) {
    echo "Email successfully sent to $dest ...";
  } else {
    echo "Failed to send email...";
  }
?>
