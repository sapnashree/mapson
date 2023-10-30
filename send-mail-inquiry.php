<?php

         echo "<script>alert('Thank you! We will contact you soon!');</script>";

    $name       = @trim(stripslashes($_POST['name'])); 
    $email      = @trim(stripslashes($_POST['email'])); 
    $mobile   = @trim(stripslashes($_POST['mobile'])); 
    
    $comments    = @trim(stripslashes($_POST['comments'])); 

    $email_from = $email;
    $email_to = 'vedhindia@gmail.com';

    $body = 'Contact Detail Recieved from Your Website' . "\n\n\n" .'Name: ' . $name . "\n\n" . 'Email: ' . $email . "\n\n" . 'Mobile: ' . $mobile . "\n\n" . 'Comments: ' . $comments;

    $success = @mail($email_to, $name, $body, 'From: <'.$email_from.'>');

    echo "<script>window.location='contactform.php';</script>";
    die;
?>         