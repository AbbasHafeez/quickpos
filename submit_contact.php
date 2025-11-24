<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    header('Location: index.php#contact');
    exit;
}

$name = isset($_POST['name']) ? trim($_POST['name']) : '';
$email = isset($_POST['email']) ? trim($_POST['email']) : '';
$message = isset($_POST['message']) ? trim($_POST['message']) : '';

$errors = [];

if ($name === '') { $errors[] = "Name is required."; }
if ($email === '') { $errors[] = "Email is required."; }
elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) { $errors[] = "Email is invalid."; }
if ($message === '') { $errors[] = "Message is required."; }

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    $_SESSION['form_data'] = $_POST;
    header('Location: index.php#contact');
    exit;
}

// Log to file
$logEntry = [
    'time' => date('Y-m-d H:i:s'),
    'name' => $name,
    'email' => $email,
    'message' => $message
];
file_put_contents('messages.log', json_encode($logEntry) . PHP_EOL, FILE_APPEND);

// Success: redirect to thank-you
header('Location: thank-you.html');
exit;