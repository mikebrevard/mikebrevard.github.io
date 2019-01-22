<?php
error_reporting(0);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name           = $_POST["name"];
    $phone          = $_POST["phone"];
    $email          = $_POST["email"];
    $attendance     = $_POST["attendance"];
    $guest          = $_POST["guest"];
    $children       = $_POST["children"];
    $messages       = $_POST["messages"];


    // Set the recipient email address
    $recipient = "mikeandceleste2019@gmail.com, $email";

    $subject = "TODO";
    $email_content = "TODO";
    $signature = "\r\n\r\nBest Wishes,\r\n\r\nMike and Celeste";

    if (substr($attendance, 0, 3) === "Yes") {
      $subject = "$name is attending Mike and Celeste's Wedding!";
      $email_content = "Thank you for filling out the form on our site. We're excited that you'll be able to attend! We will send out an e-mail regarding hotel information and the dinner options for the event in the coming days. This is a summary of the information you provided in the form. $name will be attending with $guest guests and $children children. Their contact information is $phone and $email. They also mentioned that '$messages'$signature";
    } else {
        $subject = "$name will not be able to attend Mike and Celeste's Wedding! =(";
        $email_content = "Thank you for filling out the form on our site. We're sad to hear you won't be able to attend our wedding. If your plans change, please let us know before March 20th.$signature";
    }

    if (mail($recipient, $subject, $email_content)) {
      die("success");
    } else {
       die("fail");
    }

}
?>
