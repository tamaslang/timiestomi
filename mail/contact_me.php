<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['joinus']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "Nincs megadva adat!";
	return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$joinus = $_POST['joinus'];
$message = $_POST['message'];
$attendee= $_POST['attendee'];

// Create the email and send the message
$to = 'langtamas+lagzi@gmail.com, timea.molnar3+lagzi@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Visszajelzes:  $name - $attendee";
$email_body = "Uj visszajelzest kaptal a lakodalomra.\n\n"."Reszletek:\n\nNev: $name\n\nEmail: $email_address\n\nJon-e: $joinus\n\nSzallassal kapcsolatos uzenet:\n$message";
$headers = "From: noreply@timiestomi.hu\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>