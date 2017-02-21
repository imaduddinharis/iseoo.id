<?php
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
                $headers = 'From: IS.EO <no-reply@dartpro.esy.es>';
                $messages =
"Thank You ".$_POST["mail"]." for subscribing , 
We will send you information about the launch of our Application





Best Regards,
Team IS.EO
";
		if(mail($_POST["mail"], "SUBSCRIBE", $messages, $headers))
                     echo "You've been successfully subscribed!";
                else
                     echo "here was a problem!";
	}
?>