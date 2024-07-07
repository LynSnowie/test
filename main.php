<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $recipient = $_POST["recipient"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    // Use wordwrap() if lines are longer than 70 characters
    $message = wordwrap($message, 70);

    // Send the email
    mail($recipient, $subject, $message);
    echo "Email sent successfully!";
}
?>
