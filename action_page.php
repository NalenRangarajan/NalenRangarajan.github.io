<?php
if (isset($_POST['sendEmail'])) {
    $name = $_POST['name'];
    $email = $_POST['emailAddress'];
    $location = $_POST['location'];
    $message = $_POST['subject'];

    $to = 'sandbagclimbing1@gmail.com'; // Replace with the recipient's email address
    $subject = 'New Email from Website';
    $headers = "From: $email";

    $emailMessage = "Name: $name\n";
    $emailMessage .= "Email: $email\n";
    $emailMessage .= "Location: $location\n";
    $emailMessage .= "Message:\n$message";

    mail($to, $subject, $emailMessage, $headers);
    
    echo "Email sent successfully!";
}
?>



