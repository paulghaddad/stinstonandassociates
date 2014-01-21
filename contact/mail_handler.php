<?php 
if(isset($_POST['submit'])){
    $to = "stinson@stinsonandassociates.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Contact Form Submission from Stinson and Associates";
    $message = "Name: " . $name . " \n\n" . "Email Address: " . $from . " \n\n" . "Message:" . "\n\n" . $_POST['message'];
    $headers = "From:" . "stinson";
    //$headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    header('Location: confirmation.php#confirmed');
    //echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>