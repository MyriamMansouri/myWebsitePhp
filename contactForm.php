<?php 
    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mailFrom = $_POST['email'];
        $message = $_POST['message'];

        $mailTo = "info@myriammansouri.com";
        $subject = 'New email from myriammansouri.com';
        $headers = "From: ".$mailFrom;
        $txt = "You have received an email from ".$name.".\n\n".$message;
        $txt = str_replace("\n.", "\n..", $txt);
        
        mail($mailTo, $subject, $txt, $headers);
        header("Location: indexphp?mailsent");

    }