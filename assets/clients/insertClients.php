<?php
	require_once '../db/_connectionDB.php';

	$post = $_POST;

	if (
		empty($post['name'])  ||
		empty($post['email']) ||
		!filter_var($post['email'],FILTER_VALIDATE_EMAIL)
	) {
		echo "Error en los datos";
		return false;
	}

	$name          = strip_tags(htmlspecialchars($_POST['name']));
	$email_address = strip_tags(htmlspecialchars($_POST['email']));

	$to            = 'ellestyl@ellestylecoach.com';
	$email_subject = "Descarga del E-Book:  $name";
	$email_body    = "Se ha descargado el E-Book Guapa todos los dias.\n\n"."Aca estan los detalles:\n\nNombre: $name\n\nEmail: $email_address";
	$headers       = "De: noreply@ellestylecoach.com\n";
	$headers      .= "Responder a: $email_address";

	//@mail($to,$email_subject,$email_body,$headers);

	$sqlInsert     = "INSERT INTO Clients (Name, Email) VALUES ('{$name}', '{$email_address}')";
	$insertClientQ = $mysqli -> query($sqlInsert);
	
	if($insertClientQ)
		return true;
	else
		return false;
