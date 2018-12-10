<?php
require 'class.phpmailer.php';
require 'class.smtp.php';
  $to = 'b17050@students.iitmandi.ac.in';
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $mail = new PHPMailer;
  $mail->setFrom('admin@example.com');
  $mail->addAddress($to);
  $mail->Subject = 'Query from the website';
  $mail->Body = 'Name: '.$name.'\n Email: '.$email.'\n Message: '.$message;
  $mail->IsSMTP();
  $mail->SMTPSecure = 'ssl';
  $mail->Host = 'ssl://smtp.gmail.com';
  $mail->SMTPAuth = true;
  $mail->Port = 465;

  //Set your existing gmail address as user name
  $mail->Username = 'neera99j@gmail.com';
  //Set the password of your gmail address here
  $mail->Password = '145518110gmail'; //password is removed


  if(!$mail->send()) {
    echo 'Email is not sent.';
    echo 'Email error: ' . $mail->ErrorInfo;
  } else {
    echo "<script type='text/javascript'>alert('Your Query has been sent.');</script>";
    header("Location: index.html");
  } 
 
?>