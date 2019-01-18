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

    if (mail($recipient, $subject, $email_content)) {
      die("success");
    } else {
       die("fail");
    }

    // Build the email content.
    // $email_content = "Name: $name\n";
    // $email_content .= "Phone: $phone\n\n";
    // $email_content .= "Email: $email\n\n";
    // $email_content .= "Message:\n$message\n";
    //
    // // using SendGrid's PHP Library
    // // https://github.com/sendgrid/sendgrid-php
    // // require 'vendor/autoload.php'; // If you're using Composer (recommended)
    // // Comment out the above line if not using Composer
    // require("./sendgrid-php/sendgrid-php/sendgrid-php.php");
    // // If not using Composer, uncomment the above line
    // $email = new \SendGrid\Mail\Mail();
    // $email->setFrom($recipient, "Mike & Celeste");
    // $email->setSubject($subject);
    // $email->addTo($email, $name);
    // $email->addContent(
    //     "text/plain", $email_content
    // );
    // $email->addContent(
    //     "text/plain", "and easy to do anywhere, even with PHP"
    // );
    // $email->addContent(
    //     "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
    // );
    // $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
    // try {
    //     $response = $sendgrid->send($email);
    //     print $response->statusCode() . "\n";
    //     print_r($response->headers());
    //     print $response->body() . "\n";
    // } catch (Exception $e) {
    //     echo 'Caught exception: ',  $e->getMessage(), "\n";
    // }

    // // Build the email headers.
    // $email_headers = "From: $name <$email>".
    // 'Reply-To: mikeandceleste2019@gmail.com' . "\r\n" .
    // 'X-Mailer: PHP/' . phpversion();
    //
    // // send
    // if (mail($recipient, $subject, $email_content, $email_headers)) {
    //     die("success");
    // } else {
    //    die("fail");
    // }
}
?>
