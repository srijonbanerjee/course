<?php
  if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = "srijonbanerjee389@gmail.com";
    $subject = "Message from $name";
    $headers = "From: $email\r\n";
    
    mail($to, $subject, $message, $headers);
    
    echo "Thank you for your message, $name. We'll be in touch soon.";
  }
?>
