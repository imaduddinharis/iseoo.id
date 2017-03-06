<?php
	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
                $headers = 'From: IS.EO <no-reply@iseoo.id>';
                $headers1 = 'From: IS.EO <'.$_POST["mail"].'>';
                $messages =
"Thank You ".$_POST["mail"]." for subscribing , 
We will send you information about the launch of our Application





Best Regards,
Team IS.EO
";
		if(mail("client.dartpro@gmail.com", "SUBSCRIBE", " Email: '" . $_POST["mail"]."' Was Subsribed", $headers1)&&mail($_POST["mail"], "SUBSCRIBE", $messages, $headers))
                     echo "You've been successfully subscribed!";
                else
                     echo "here was a problem!";
	}
?>