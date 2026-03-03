<?php
/**
 * Visitfy Web2.0 – Contact Form Mail Handler
 */
declare(strict_types=1);

header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['ok' => false, 'error' => 'Method Not Allowed']);
    exit;
}

$raw  = file_get_contents('php://input');
$data = json_decode($raw, true);

if (!is_array($data)) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Invalid JSON']);
    exit;
}

$name    = trim((string) ($data['name']    ?? ''));
$email   = trim((string) ($data['email']   ?? ''));
$message = trim((string) ($data['message'] ?? ''));

if ($name === '' || $email === '' || $message === '') {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Missing required fields']);
    exit;
}

// Strip newlines to prevent SMTP header injection
$email = str_replace(["\r", "\n"], '', $email);

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo json_encode(['ok' => false, 'error' => 'Invalid email address']);
    exit;
}

$to      = 'info@visitfy.de';
$subject = 'Neue Kontaktanfrage von ' . htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
$body    = "Name: {$name}\nE-Mail: {$email}\n\nNachricht:\n{$message}";
$headers = implode("\r\n", [
    'From: noreply@visitfy.de',
    'Reply-To: ' . $email,
    'X-Mailer: Visitfy-Web2.0',
    'Content-Type: text/plain; charset=UTF-8',
]);

$sent = mail($to, $subject, $body, $headers);

if ($sent) {
    echo json_encode(['ok' => true]);
} else {
    http_response_code(500);
    echo json_encode(['ok' => false, 'error' => 'Mail delivery failed']);
}
