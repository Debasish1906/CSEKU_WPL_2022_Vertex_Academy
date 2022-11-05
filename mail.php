<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form method="post" action="" style="padding-top:50px;padding-bottom:50px;"align="center";>
  
            <h2>Recover your password</h2><br>
            Enter Your Email :<br><br>
            <input type="text" name="email"placeholder="email"><br>
            <br>
            <input type="submit" value="SEND" name="submit">   <br><br>         
         </form>
</body>
</html>





<?php
 include './partials/connect.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);
 if(isset($_POST['submit'])){
          
$email =$_POST['email'];

$run = mysqli_query($con, "select * from user_table where user_email='$email'  " );
$row= mysqli_fetch_array($run);
  $check = mysqli_num_rows($run);
  if($check == 1){
      
      
$password=$row['user_password'];
      try {
 
                  
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                     
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'vertexacademy0632@gmail.com';                    
    $mail->Password   = 'zfnifwztfphgsnaw';                             
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
    $mail->Port       = 465;                                    

  
    $mail->setFrom('vertexacademy0632@gmail.com', 'Vertex Academy');

    $mail->addAddress($_POST['email']);             


    $mail->isHTML(true);                                 
    $mail->Subject = 'Password Recovery';
    $mail->Body    = 'This is your Password: '.$password;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
   
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
      
 echo "<script>alert('Password has been sent to your email')</script>";
            echo "<script>window.open('logins.php','_self')</script>";
  }
     else{
           echo"<script>alert('Your Email does not exist! At first create an account ')</script>";
     }
 }

