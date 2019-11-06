<?php 
if(isset($_POST['submit'])){
    $to = "dspringer08@yahoo.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $fullname = $_POST['fullname'];
    $number = $_POST['number'];
    $subject = "You have a(n) " + $_POST['inquiry'] + " from " + $_POST['fullname'];
    $subject2 = "Copy of your form submission";
    $message = $fullname " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message.\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>
