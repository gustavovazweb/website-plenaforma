<?php
// POST DATA
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$message = $_POST['message'];

$headers = "Content-Type: text/plain;charset=utf-8\r\n";
$headers .= "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";

// DATA
$body = "Contact form page\r\n";
$body .= "Nome: " . $name . "\r\n";
$body .= "Email: " . $email . "\r\n";
$body .= "Mensagem: " . $message . "\r\n";

// EMAIL - DESTINY
$email_to = 'contato@centroplenaforma.com.br';

// SENDING EMAIL
$status = mail($email_to, mb_encode_mimeheader($subject, "utf-8"), $body, $headers);

if ($status):
  // SUCCESS GET MESSAGE
  header('location:index.ph?status=success');
else:
  // ERROR GET MESSAGE
  header('location:index.php?status=error');
endif;
?>