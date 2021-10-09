<?php
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $message = $_REQUEST['message'];

    //Ensure all fields are completed
    if (empty($name) || empty($email) || empty($message)) {
        echo('Please fill in all fields.');
    }else{
        mail( "sumit360saha@gmail.com", "Email Form", $message, "From: $name <$email>");
        echo "<script type='text/javascript'>alert('message sent successfully');
            window.history.go(-1);
            </script>";
    }
?>