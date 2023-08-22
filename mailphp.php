<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);
$fullname=$_POST['fullName'];
$number=$_POST['number'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
try {
	$mail->SMTPDebug = 2;									
	$mail->isSMTP();										
	$mail->Host	 = 'smtp.gmail.com;';				
	$mail->SMTPAuth = true;							
	$mail->Username = 'shivanigupta5634769@gmail.com';				
	$mail->Password = '*******';					
	$mail->SMTPSecure = 'tls';							
	$mail->Port	 = 587;

	$mail->setFrom('shivanigupta5634769@gmail.com', 'Shivani Gupta');		
	$mail->addAddress($_POST['email']);
	$mail->addAddress($_POST['email'], $_POST['fullName']);
	
	$mail->isHTML(true);								
	$mail->Subject =$_POST['subject'];
	$mail->Body = $_POST['message'];
	$mail->AltBody = 'Body in plain text for non-HTML mail clients';
	$mail->send();
	echo "Mail has been sent successfully!";
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>

?>

// echo $fullname,$number,$email,$subject,$message;
?>
