ADMIN PANEL LOGIN:

Username: admin@admin.com
Password: password

USER LOGIN:

Username: harry@den.com
Password: code0

YOU HAVE TO SETUP MAILER. FOR FREE MAILER REGISTER https://mailtrap.io AND SELECT Laravel 7+ FROM Integrations

MAIL_MAILER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=39df261136a1d7
MAIL_PASSWORD=9e97f1b78de146
MAIL_ENCRYPTION=tls

UPDATE INFORMATION IN register.php FILE

$mail->isSMTP();                                     
$mail->Host = 'smtp.mailtrap.io';
$mail->SMTPAuth = true;                               
$mail->Username = '39df261136a1d7';
$mail->Password = '9e97f1b78de146';
$mail->SMTPOptions = array(
	'ssl' => array(
	'verify_peer' => false,
	'verify_peer_name' => false,
	'allow_self_signed' => true
	)
);  
$mail->SMTPSecure = 'tls';
$mail->Port = 2525;