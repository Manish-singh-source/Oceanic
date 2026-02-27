<?php

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

require __DIR__ . '/PHPMailer-master/src/Exception.php';
require __DIR__ . '/PHPMailer-master/src/PHPMailer.php';
require __DIR__ . '/PHPMailer-master/src/SMTP.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: request-quote.php');
    exit;
}

$fullName = trim($_POST['full_name'] ?? '');
$contactNumber = trim($_POST['contact_number'] ?? '');
$email = trim($_POST['email_id'] ?? '');
$productName = trim($_POST['product_name'] ?? '');
$typeLiter = trim($_POST['type_liter'] ?? '');
$message = trim($_POST['message'] ?? '');

if (
    $fullName === '' ||
    $contactNumber === '' ||
    $productName === '' ||
    $typeLiter === '' ||
    $message === '' ||
    !filter_var($email, FILTER_VALIDATE_EMAIL)
) {
    header('Location: request-quote.php?status=validation_error');
    exit;
}

$smtpMailer = getenv('MAIL_MAILER') ?: 'smtp';
$smtpHost = getenv('MAIL_HOST') ?: 'smtp.gmail.com';
$smtpPort = (int) (getenv('MAIL_PORT') ?: 587);
$smtpUsername = getenv('MAIL_USERNAME') ?: 'support@technofra.com';
$smtpPassword = getenv('MAIL_PASSWORD') ?: 'kcdivqkodwgvyaku';
$smtpEncryption = getenv('MAIL_ENCRYPTION') ?: PHPMailer::ENCRYPTION_STARTTLS;
$smtpFromEmail = getenv('MAIL_FROM_ADDRESS') ?: 'support@technofra.com';
$smtpFromName = getenv('MAIL_FROM_NAME') ?: (getenv('APP_NAME') ?: 'Oceanic Website');
$adminEmail = getenv('QUOTE_ADMIN_EMAIL') ?: (getenv('CONTACT_ADMIN_EMAIL') ?: $smtpUsername);

if ($smtpFromName === '${APP_NAME}' || $smtpFromName === '${APP_NAME}') {
    $smtpFromName = getenv('APP_NAME') ?: 'Oceanic Website';
}

if (
    strtolower($smtpMailer) !== 'smtp' ||
    $smtpHost === '' ||
    $smtpUsername === '' ||
    $smtpPassword === '' ||
    $smtpFromEmail === '' ||
    $adminEmail === ''
) {
    header('Location: request-quote.php?status=config_error');
    exit;
}

function esc(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function renderEmailTemplate(string $title, string $subtitle, string $contentHtml, string $footerText, string $logoUrl = ''): string
{
    $safeTitle = esc($title);
    $safeSubtitle = esc($subtitle);
    $safeFooterText = esc($footerText);
    $logoHtml = $logoUrl !== ''
        ? '<img src="' . esc($logoUrl) . '" alt="Logo" width="150" style="display:block;margin:0 auto 16px auto;">'
        : '';

    return '
<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>' . $safeTitle . '</title>
</head>
<body style="margin:0;padding:0;background:#eef3f8;font-family:Arial,Helvetica,sans-serif;">
  <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="background:#eef3f8;padding:28px 10px;">
    <tr>
      <td align="center">
        <table role="presentation" width="640" cellspacing="0" cellpadding="0" border="0" style="max-width:640px;background:#ffffff;border-radius:14px;overflow:hidden;box-shadow:0 8px 28px rgba(0,0,0,0.08);">
          <tr>
            <td style="padding:28px 28px 18px 28px;background:linear-gradient(135deg,#0b4d8a,#0f6fbf);color:#ffffff;">
              ' . $logoHtml . '
              <h1 style="margin:0 0 8px 0;font-size:24px;line-height:30px;font-weight:700;text-align:center;">' . $safeTitle . '</h1>
              <p style="margin:0;font-size:14px;line-height:22px;opacity:0.95;text-align:center;">' . $safeSubtitle . '</p>
            </td>
          </tr>
          <tr>
            <td style="padding:24px 28px 8px 28px;color:#1f2a37;">' . $contentHtml . '</td>
          </tr>
          <tr>
            <td style="padding:20px 28px 28px 28px;color:#6b7280;font-size:12px;line-height:18px;border-top:1px solid #e5e7eb;">
              ' . $safeFooterText . '
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>';
}

function buildMailer(
    string $smtpHost,
    int $smtpPort,
    string $smtpUsername,
    string $smtpPassword,
    string $smtpEncryption,
    string $smtpFromEmail,
    string $smtpFromName
): PHPMailer {
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = $smtpHost;
    $mail->Port = $smtpPort;
    $mail->SMTPAuth = true;
    $mail->Username = $smtpUsername;
    $mail->Password = $smtpPassword;
    $mail->SMTPSecure = $smtpEncryption;
    $mail->setFrom($smtpFromEmail, $smtpFromName);
    $mail->isHTML(true);
    return $mail;
}

try {
    $logoUrl = 'assets/img/logo/home-01-header-logo.png';
    $safeName = esc($fullName);
    $safePhone = esc($contactNumber);
    $safeEmail = esc($email);
    $safeProduct = esc($productName);
    $safeTypeLiter = esc($typeLiter);
    $safeMessageHtml = nl2br(esc($message));
    $safeFromName = esc($smtpFromName);

    $adminContent = '
      <p style="margin:0 0 16px 0;font-size:14px;line-height:22px;">A new quote request has been submitted from the website.</p>
      <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="border-collapse:collapse;border:1px solid #dbe4ee;border-radius:10px;overflow:hidden;">
        <tr><td style="padding:12px;background:#f8fbff;font-weight:700;border-bottom:1px solid #dbe4ee;width:180px;">Full Name</td><td style="padding:12px;border-bottom:1px solid #dbe4ee;">' . $safeName . '</td></tr>
        <tr><td style="padding:12px;background:#f8fbff;font-weight:700;border-bottom:1px solid #dbe4ee;">Contact Number</td><td style="padding:12px;border-bottom:1px solid #dbe4ee;">' . $safePhone . '</td></tr>
        <tr><td style="padding:12px;background:#f8fbff;font-weight:700;border-bottom:1px solid #dbe4ee;">Email</td><td style="padding:12px;border-bottom:1px solid #dbe4ee;">' . $safeEmail . '</td></tr>
        <tr><td style="padding:12px;background:#f8fbff;font-weight:700;border-bottom:1px solid #dbe4ee;">Product</td><td style="padding:12px;border-bottom:1px solid #dbe4ee;">' . $safeProduct . '</td></tr>
        <tr><td style="padding:12px;background:#f8fbff;font-weight:700;border-bottom:1px solid #dbe4ee;">Type / Liter</td><td style="padding:12px;border-bottom:1px solid #dbe4ee;">' . $safeTypeLiter . '</td></tr>
        <tr><td style="padding:12px;background:#f8fbff;font-weight:700;vertical-align:top;border-bottom:1px solid #dbe4ee;">Message</td><td style="padding:12px;border-bottom:1px solid #dbe4ee;">' . $safeMessageHtml . '</td></tr>
      </table>';

    $userContent = '
      <p style="margin:0 0 14px 0;font-size:14px;line-height:22px;">Hi ' . $safeName . ',</p>
      <p style="margin:0 0 16px 0;font-size:14px;line-height:22px;">Thank you for your quote request. We have received your details and our team will get back to you shortly.</p>
      <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="border-collapse:collapse;border:1px solid #dbe4ee;border-radius:10px;overflow:hidden;">
        <tr><td style="padding:12px;background:#f8fbff;font-weight:700;border-bottom:1px solid #dbe4ee;width:180px;">Product</td><td style="padding:12px;border-bottom:1px solid #dbe4ee;">' . $safeProduct . '</td></tr>
        <tr><td style="padding:12px;background:#f8fbff;font-weight:700;border-bottom:1px solid #dbe4ee;">Type / Liter</td><td style="padding:12px;border-bottom:1px solid #dbe4ee;">' . $safeTypeLiter . '</td></tr>
        <tr><td style="padding:12px;background:#f8fbff;font-weight:700;vertical-align:top;">Message</td><td style="padding:12px;">' . $safeMessageHtml . '</td></tr>
      </table>
      <p style="margin:16px 0 0 0;font-size:14px;line-height:22px;">Regards,<br>' . $safeFromName . '</p>';

    $adminMailer = buildMailer($smtpHost, $smtpPort, $smtpUsername, $smtpPassword, $smtpEncryption, $smtpFromEmail, $smtpFromName);
    $adminMailer->addAddress($adminEmail, 'Admin');
    $adminMailer->addReplyTo($email, $fullName);
    $adminMailer->Subject = 'New Quote Request: ' . $productName;
    $adminMailer->Body = renderEmailTemplate(
        'New Quote Request',
        'Website quote request details are listed below.',
        $adminContent,
        'This is an automated message from your website quote form.',
        $logoUrl
    );
    $adminMailer->AltBody =
        "New quote request received.\n\n" .
        "Full Name: {$fullName}\n" .
        "Contact Number: {$contactNumber}\n" .
        "Email: {$email}\n" .
        "Product: {$productName}\n" .
        "Type / Liter: {$typeLiter}\n" .
        "Message:\n{$message}";
    $adminMailer->send();

    $userMailer = buildMailer($smtpHost, $smtpPort, $smtpUsername, $smtpPassword, $smtpEncryption, $smtpFromEmail, $smtpFromName);
    $userMailer->addAddress($email, $fullName);
    $userMailer->Subject = 'Thank you for your quote request';
    $userMailer->Body = renderEmailTemplate(
        'Thank You For Your Quote Request',
        'We have received your request successfully.',
        $userContent,
        'Need help urgently? Reply to this email and our team will assist you.',
        $logoUrl
    );
    $userMailer->AltBody =
        "Hi {$fullName},\n\n" .
        "Thank you for your quote request. We have received your details and our team will get back to you soon.\n\n" .
        "Your submitted details:\n" .
        "Product: {$productName}\n" .
        "Type / Liter: {$typeLiter}\n" .
        "Message: {$message}\n\n" .
        "Regards,\n{$smtpFromName}";
    $userMailer->send();

    header('Location: request-quote.php?status=success');
    exit;
} catch (Exception $e) {
    header('Location: request-quote.php?status=mail_error');
    exit;
}
