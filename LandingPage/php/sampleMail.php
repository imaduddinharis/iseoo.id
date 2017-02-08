<?php
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$headers = 'From: IS.EO <no-reply@dartpro.esy.es>';
                $messages =
"Thank You ".$_POST["firstname"]." for sent messages to us , 
We will send you information about the launch of our Application





Best Regards,
Team IS.EO
";
		if(mail("client.dartpro@gmail.com", "Member Message", "User: " . $_POST["firstname"] . " Email: " . $_POST["email"], $headers) && mail($_POST["email"], "SUBSCRIBE", $messages, $headers))
                     echo "You've been successfully subscribed!";
                else
                     echo "There was a problem!";
	}
?>