<?php
error_reporting(0);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name           = $_POST["name"];
    $phone          = $_POST["phone"];
    $email          = $_POST["email"];
    $attendance     = $_POST["attendance"];
    $guest          = $_POST["guest"];
    $messages       = $_POST["messages"];


    // Set the recipient email address
    $recipient = "mikeandceleste2019@gmail.com, $email";

    // Set the email subject.
    $subject = "Confirmation: $name is attending Mike and Celeste's Wedding!";

    $email_content = "Thank you for being able to attend Celete and I's Wedding!\n";
    $email_content .= "An additional e-mail will be sent to $email regarding information on hotel information and food options for the event\n";
    $email_content .= "Below is the information from the form:\n";
    $email_content .= "<b>Name</b>: "
    $email_content .= $name;
    $email_content .= "\n<b>Phone</b>: "
    $email_content .= $phone;
    $email_content .= "\n<b>E-mail</b>: "
    $email_content .= $email;
    $email_content .= "\n<b>Number of Guests</b>: "
    $email_content .= $attendance;
    $email_content .= "\n<b>Message</b>: "
    $email_content .= $messages;
    $email_content .= "\nBest,";
    $email_content .= "\tMike";

    if (mail($recipient, $subject, $email_content)) {
      die("success");
    } else {
       die("fail");
    }

}
?>
