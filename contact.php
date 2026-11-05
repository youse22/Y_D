<?php
// Remplace la bibliothèque "PHP Email Form" (version pro) par la fonction mail() native.
header('Content-Type: application/json; charset=utf-8');

$to = 'youseniedorsainvil@gmail.com';

function out($ok, $msg){ echo json_encode(['ok' => $ok, 'message' => $msg]); exit; }

if ($_SERVER['REQUEST_METHOD'] !== 'POST') out(false, 'Requête invalide.');

// Champ piège anti-spam : un humain ne le remplit pas
if (!empty($_POST['website'])) out(true, 'Message envoyé. Merci !');

$name    = trim($_POST['name'] ?? '');
$email   = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

if ($name === '' || $subject === '' || $message === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
  out(false, 'Vérifiez les champs du formulaire.');
}

// Empêche l'injection d'en-têtes
$clean = fn($s) => str_replace(["\r", "\n"], ' ', $s);
$name = $clean($name); $subject = $clean($subject); $email = $clean($email);

$host = preg_replace('/^www\./', '', $_SERVER['HTTP_HOST'] ?? 'localhost');
$headers = [
  'From: Portfolio <no-reply@' . $host . '>',
  'Reply-To: ' . $name . ' <' . $email . '>',
  'Content-Type: text/plain; charset=UTF-8',
];
$body = "De : $name\nE-mail : $email\n\n$message";

$sent = mail($to, '[Portfolio] ' . $subject, $body, implode("\r\n", $headers));
out($sent, $sent ? 'Message envoyé. Merci !' : 'Échec de l’envoi. Écrivez-moi directement par e-mail.');
