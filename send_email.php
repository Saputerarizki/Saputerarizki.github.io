<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = 'arbypratama16@gmail.com'; // Replace with your own email address
    $headers = "From: $name <$email>" . "\r\n";
    $headers .= "Reply-To: $name <$email>" . "\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    mail($to, $subject, $message, $headers);
}
?>
