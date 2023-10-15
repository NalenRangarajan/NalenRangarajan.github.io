<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the form data
    $sender = $_POST['email'];
    $name = $_POST['name'];
    $message = $_POST['subject'];
    $location = $POST['location'];

    // Set the email subject and sender
    $subject = "Message from: $name";
    $from = "sandbagclimbing1@gmail.com"; 

    // Compose the email message
    $headers = "From: $from\r\n";
    $headers .= "Reply-To: $from\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email
    mail($sender, $subject, $message, $headers);

    // Redirect back to the form
    header("Location: index.html"); 
} else {
    // Handle the form submission method
    // You can provide a message here if needed
    echo "Form submission method not allowed.";
}
?>