<?php
if (!defined('AXE'))
	exit;

require_once "Mail.php";


if ($to<>'')
{	
	$headers = array ('From' => $from,
	  'To' => $to,
	  'Subject' => $subject);
	$smtp = Mail::factory('smtp',
	  array ('host' => $smtp_h,
		'auth' => true,
		'username' => $smtp_u,
		'password' => $smtp_p));
	
	$mail = $smtp->send($to, $headers, $body);
	
	if (PEAR::isError($mail)) {
	  echo("<p>" . $mail->getMessage() . "</p>");
	  $smtpme="<font color='red'>Error: " . $mail->getMessage() . "</font><br><br><strong>Le courrier n'a pas été envoyé. Pour recevoir votre mot de passe se il vous plaît contacter un administrateur.</strong><br><br>";
	 } else {
	  $smtpme="Le message a été envoyé avec succès. S'il vous plaît vérifier votre e-mail.<br>";
	 }
}
?>