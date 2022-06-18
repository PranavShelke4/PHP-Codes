<?php

    $to = "pranavshelkes4@gmail.com";
    $subject = "Test mail";
    $message = "Hello! This is a test email message.";
    $header = "From:pranavshelke4@gmail.com";
    $header = "Cc:pranavshelkeofficial@gmail.com";
    $retval = mail($to,$subject,$message,$header);
    if( $retval == true )
    {
        echo "Message sent successfully";
    }
    else
    {
        echo "Message could not be sent";
    }

?>