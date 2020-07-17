<?php
	error_reporting(E_ALL ^ E_NOTICE);
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

	$name          = $_POST['name'];
	$email_address = $_POST['email'];

	$to            = 'ellestyl@ellestylecoach.com';
	$email_subject = "Descarga del E-Book:  $name";
	$email_body    = "Se ha descargado el E-Book Guapa todos los dias.\n\n"."Aca estan los detalles:\n\nNombre: $name\n\nEmail: $email_address";
	$headers       = "De: noreply@ellestylecoach.com\n";
	$headers      .= "Responder a: $email_address";

	$sendMail      = @mail($to,$email_subject,$email_body,$headers);

	if($sendMail){
		$sqlInsert     = "INSERT INTO Clients (Name, Email) VALUES ('{$name}', '{$email_address}')";
		$insertClientQ = $mysqli -> query($sqlInsert);
		if($insertClientQ)
			return true;
		else
			return false;
	}else{
		print_r(error_get_last()['message']);
		return false;
	}

	
