<?php 



$nameofschool = strip_tags(htmlspecialchars($_POST['nameofschool']));
						$nameofprincipal = strip_tags(htmlspecialchars($_POST['nameofprincipal']));
				$email = strip_tags(htmlspecialchars($_POST['email']));
		$number = strip_tags(htmlspecialchars($_POST['number']));
            $schooladdress = strip_tags(htmlspecialchars($_POST['schooladdress']));
        $state = $_POST['state'];

   
// Create the email and send the message
$to = 'yourname@yourdomain.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $nameofschool";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName of the School: $nameofschool\n\n Name of the Principal: $nameofprincipal \n\n  Email Address: $email\n\nPhone Number: $number\n\nSchool Address: $schooladdress\n\n State: $state \n ";
$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
 ?>