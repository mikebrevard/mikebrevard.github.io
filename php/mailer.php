<?php
error_reporting(0);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name           = $_POST["name"];
    $phone          = $_POST["phone"];
    $email          = $_POST["email"];
    $attendance     = $_POST["attendance"];
    $guest          = $_POST["guest"];
    $messages        = $_POST["messages"];


    // Set the recipient email address.
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
    'Reply-To: yourmail@example.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

    // send
    console.log($email_content)
    // if (mail($recipient, $subject, $email_content, $email_headers)) {
    //     die("success");
    // } else {
    //    die("fail");
    // }

    $mail = new PHPMailer(); // create a new object
    $mail->IsSMTP(); // enable SMTP
    $mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
    $mail->SMTPAuth = true; // authentication enabled
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 465; // or 587
    $mail->IsHTML(true);
    $mail->Username = "mikeandceleste2019@gmail.com";
    $mail->Password = "Wddng2019!";
    $mail->SetFrom("mikeandceleste2019@gmail.com");
    $mail->Subject = $subject;
    $mail->Body = $email_content;
    $mail->AddAddress($email);

    if(!$mail->Send()) {
      echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
      echo "Message has been sent";
    }

}
?>
