<?php 
if(isset ($_POST['submit'])){
    $inquiry = $_POST['inquiry'];
    $email = $_POST['email'];
    $to = "dspringer08@yahoo.com";
    $fullname = $_POST['fullname'];
    $number = $_POST['number'];
    $subject = "You have a new email from your E-Portfolio";
    $message = $_POST['message'];
    $file = $_POST['attachedFile'];
    $body = '<html>
                <body>
                    <h3>You have a new '.$inquiry.' from '.$fullname.' </h3>
                    <p>Email: '.$email.'</p>
                    <p>Name: '.$fullname.'</p>
                    <p>Number: '.$number.'</p>
                    <p>Message: '.$message.'</p>
                    <p>They also sent the attached file: '.$file.'</p>
                </body>
            </html>'; 


    $headers = "From: " .$email."\r\n";
    $headers .= "Reply-To:  ".$email."\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset-utf-8";
    $send = mail($to,$subject,$body,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    }
?>

