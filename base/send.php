<?php

$name=$_POST['firstname'];
$lastname=$_POST['lastname'];
$years=$_POST['old'];
$email=$_POST['mail'];
$subject=$_POST['subject'];
$msg=$_POST['msg'];
$header = 'from: '.$email;
$header_reply = 'from: juanmelgrattimorales@gmail.com';

$mail_body= "Nombre: ".$name."\n"."Apellido: ".$lastname."\n"."Edad: ".$years."\n"."Motivo: ".$subject."\n"."Mensaje: ".$msg;
$mail_body_confirm = "Su mail ha sido enviado. Lo responderemos a la brevedad.";

mail("juanmelgrattimorales@gmail.com", "curso php mysql", $mail_body, $header );
mail($email, "Confirmación de envío de mail", $mail_body_confirm, $header_reply);

$database=mysqli_connect("localhost", "root", "", "phpmysql") or die ("error");

mysqli_query($database, "INSERT INTO Consulta VALUES(DEFAULT, '$name', '$lastname', $years, '$email', '$subject', '$msg')");

mysqli_close($database);

header('Location: contacto.php?send');
?>