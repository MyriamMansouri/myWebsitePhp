<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <form class="contact-form" action="contactForm.php" method="post">
 <input type="text" name="name" placeholder = "Name" />
 <input type="text" name="email" placeholder = "Email" />
 <textarea name="message" placeholder = "Message"></textarea>
 <p><input type="submit" /></p>
</form>
 <?php echo $_SERVER['HTTP_USER_AGENT'];
 if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') == FALSE) {
    echo '<br />You are using Internet Explorer.<br />';
}
 ?> 
 </body>
</html>