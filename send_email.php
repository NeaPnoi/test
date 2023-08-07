<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $isCandidate = isset($_POST["candidateCheckbox"]);
    $message = $_POST["message"];

    $emailContent = "Email: $email\nMessage: $message";
    if ($isCandidate) {
        $emailContent .= "\n\nThis person wants to be a candidate.";
    }

    $receiverEmail = "orestis.mastakas@gmail.com";
    $subject = "Contact Form Submission";
    
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    if (mail($receiverEmail, $subject, $emailContent, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Failed to send email.";
    }
}
?> 
