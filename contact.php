<?php
    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $to = "chirag8062@gmail.com";
        $subject = "Chirag you have new inquiry.";
        $headers = "From: ".$email;
        $txt = "You have received an email from ".$name.".\n\n".$message;

        mail($to,$subject,$txt,$headers);
    }
?>