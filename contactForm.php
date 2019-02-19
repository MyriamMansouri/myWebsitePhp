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
$subject = 'Email sent to myriammansouri.com';
$txt = "Message from: ".$name.".\n\n Email: ".$mailFrom.".\n\n".$message;
$txt = str_replace("\n.", "\n..", $txt);
$emailid =  array($mailTo, $mailFrom);
/* Open the try/catch block. */
for($i = 0; $i <= sizeof($emailid); $i++)   {
try {
   $mail->clearAddresses();
   $mail->setFrom($mailTo);
   $mail->addAddress($emailid[$i]);
   $mail->Subject = $subject;
   $mail->Body = $txt;

   $mail->isSMTP();
   $mail->Host = 'smtp.gmail.com';
   $mail->SMTPAuth = TRUE;
   $mail->SMTPSecure = 'tls';
   $mail->Username = $mailTo;
   $mail->Password = 'Psylorviram0+';
   $mail->Port = 587;
   
   /* Enable SMTP debug output.
   $mail->SMTPDebug = 4;   
   */

    /* Finally send the mail. */
   $mail->send();
}
catch (Exception $e)
{
   /* PHPMailer exception. */
   echo $e->errorMessage();
}
catch (\Exception $e)
{
   /* PHP exception (note the backslash to select the global namespace Exception class). */
   echo $e->getMessage();
}
}

?>

<script type="text/javascript">
    window.location = "http://www.myriammansouri.com/";
</script>    
<?php
}
?>