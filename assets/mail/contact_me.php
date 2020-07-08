<?php
	// Check for empty fields
	if(empty($_POST['name'])      ||
	   empty($_POST['email'])     ||
	   empty($_POST['phone'])     ||
	   empty($_POST['message'])   ||
	   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
	   {
	   echo "No arguments Provided!";
	   return false;
	   }
	   
	$name = strip_tags(htmlspecialchars($_POST['name']));
	$email_address = strip_tags(htmlspecialchars($_POST['email']));
	$phone = strip_tags(htmlspecialchars($_POST['phone']));
	$message = strip_tags(htmlspecialchars($_POST['message']));
	   
	// Create the email and send the message
	$to = 'ellestyl@ellestylecoach.com'; // Add your email address in between the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
	$email_subject = "Contaco desde su sitio web:  $name";
	$email_body = "Se ha recibido un mensaje desde su sitio web.\n\n"."Aca estan los detalles:\n\nNombre: $name\n\nEmail: $email_address\n\nTelefono: $phone\n\nMensaje:\n$message";
	$headers = "De: noreply@ellestylecoach.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
	$headers .= "Responder a: $email_address";
	@mail($to,$email_subject,$email_body,$headers);
	return true;         
?>