<?php 


/* Namespace alias. */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* Include the Composer generated autoload.php file. */
require './vendor/autoload.php';

if (isset($_POST['submit'])) {
/* Create a new PHPMailer object. Passing TRUE to the constructor enables exceptions. */
$mail = new PHPMailer(TRUE);

$name = $_POST['name'];
$mailFrom = $_POST['email'];
$message = $_POST['message'];

$mailTo = "myriam.mansouri@gmail.com";
$subject = 'New email from myriammansouri.com';
$txt = "You have received an email from ".$name.".\n\n Email: ".$mailFrom.".\n\n".$message;
$txt = str_replace("\n.", "\n..", $txt);


/* Open the try/catch block. */
try {
   /* Set the mail sender. */
   $mail->setFrom($mailTo, $name);

   /* Add a recipient. */
   $mail->addAddress($mailTo);

   /* Set the subject. */
   $mail->Subject = $subject;

   /* Set the mail message body. */
   $mail->Body = $txt;

   $mail->isSMTP();
   $mail->Host = 'smtp.gmail.com';
   $mail->SMTPAuth = TRUE;
   $mail->SMTPSecure = 'tls';
   $mail->Username = $mailFrom;
   $mail->Password = 'Psylorviram0+';
   $mail->Port = 587;
   
   /* Enable SMTP debug output. */
   $mail->SMTPDebug = 4;

   /* Finally send the mail. */
   $mail->send();
}
catch (Exception $e)
{
   /* PHPMailer exception. */
   echo $e->errorMessage('Error');
}
catch (\Exception $e)
{
   /* PHP exception (note the backslash to select the global namespace Exception class). */
   echo $e->getMessage();
}

}