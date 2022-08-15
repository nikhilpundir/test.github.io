<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){
  $mail = new PHPMailer(true);

  $mail->isSMTP();
  $mail->SMTPDebug  = 2;
  $mail->Host = 'smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Username = 'chaudharyharsh650@gmail.com';                    
  $mail->Password = 'nazuscotszcmyujz';
  $mail->SMTPSecure = 'ssl';
  $mail->Port = 465;

  $mail->setFrom($_POST["email"]);
  // $mail->AddReplyTo($FromEmail, $FromName);

  $mail->addAddress('nroyalrana@gmail.com');

  $mail->isHTML(true);

  $mail->Subject = $_POST["subject"];
  $mail->Body = "Mail from: {$_POST['email']}\r\n";
  $mail->Body .= "Mail Body: {$_POST['message']} \r\n";

  $mail->send();
// $mail->Body = 'Mail from: '.$email.'\r\n';
  echo
  "
  <script>
  alert('Sent Successfully');
  document.location.href = 'index.html';
  </script>
  ";
}
?>
