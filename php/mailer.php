<?php
error_reporting(0);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name           = $_POST["name"];
    $phone          = $_POST["phone"];
    $email          = $_POST["email"];
    $attendance     = $_POST["attendance"];
    $guest          = $_POST["guest"];
    $messages        = $_POST["messages"];


    // Set the recipient email address
    $recipient = "mikeandceleste2019@gmail.com";

    // Set the email subject.
    $subject = "We are attending ( $name )";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Phone: $phone\n\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>".
    'Reply-To: mikeandceleste2019@gmail.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    // send
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        die("success");
    } else {
       die("fail");
    }
}
?>
