<?php
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$headers = 'From: IS.EO <no-reply@iseoo.id>';
		$headers1 = 'From: IS.EO <'.$_POST["email"].'>';
                $messages =
"Thank You ".$_POST["firstname"]." for sent messages to us , 
We will send you information about the launch of our Application





Best Regards,
Team IS.EO
";
		if(mail("client.dartpro@gmail.com", "Member Message", "User: " . $_POST["firstname"] . " Email: " . $_POST["email"]."Message : " . $_POST["body"], $headers1) && mail($_POST["email"], "Mail Sent", $messages, $headers))
                     echo "Message has been sent!";
                else
                     echo "There was a problem!";
	}
?>