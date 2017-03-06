<?php
if(isset($_GET['tid']))
{
require 'PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Debugoutput = 'html';
$mail->Host = "mx1.idhostinger.com";
$mail->Port = 110;
$mail->SMTPAuth = true;
$mail->Username = "no-reply@dartpro.esy.es";
$mail->Password = "uuporeper74";
$mail->setFrom('no-reply@dartpro.esy.es', 'Integrated System Event Organizer');
$mail->addReplyTo('no-reply@dartpro.esy.es', 'Integrated System Event Organizer');
$mail_to_agency = $_POST['mail'];
// $name_to_agency = $row_agency['agency_name'];
$mail->addAddress($mail_to_agency, 'IS.EO');
// $mail_to_agency_pic = $row_agency_pic['pic_mail'];
// $name_to_agency_pic = $row_agency_pic['pic_name'];
// $mail->addAddress($mail_to_agency_pic, '$name_to_agency_pic');
$subject = '[IS.EO Notifications]';
$mail->Subject = $subject;
$messages =
"<body style='margin: 10px;'>
<div style='width: 640px; font-family: Helvetica, sans-serif; font-size: 13px; padding:10px; line-height:150%; border:#eaeaea solid 10px;'>
<br>
<strong>SUBSCRIBE</strong><br>
<b>Thank You</b>".$mail_to_agency."<br></b>
<br>
</div>
</body>";
$mail->msgHTML("$messages");
// Akan melakukan replace otomatis di <body> template
$mail->AltBody = 'This is a plain-text message body';
// Tambahan attachment gambar jika dibutuhkan
// $mail->addAttachment('images/phpmailer_mini.png');
// Siap kirim !
if (!$mail->send()) {
	echo "Gagal Duds !";
} else {
			?>
			<script>
				window.location.href="http://s.id/dVv";
			</script>
			<?php

}

}
?>