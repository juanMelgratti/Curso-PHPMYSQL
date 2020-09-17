<?php
$username=$_POST['username'];
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$password=$_POST['password'];
$years=$_POST['years'];
$email=$_POST['email'];
$web=$_POST['web'];

include("var.php");

$query=mysqli_query($database, "SELECT * FROM Usuarios WHERE Username='$username'") or die("error");


$row=mysqli_num_rows($query);

function mail_sender($username, $password, $email){
    $mail_body= "Nombre de usuario: ".$username."\n"."Contraseña: ".$password;
    mail($email, "Confirmación de registro", $mail_body, 'From: juanmelgrattimorales@gmail.com');
};


if($row > 0){
    header('Location: index.php?error');
}
else{

    if($years === ''){
            mysqli_query($database, "INSERT INTO Usuarios VALUES('$username', '$password', '$name','$lastname', '$email', NULL,  '$web')");

            mysqli_close($database);

            header('Location: index.php?done');

            mail_sender($username, $password, $email);
        }
    else{
            mysqli_query($database, "INSERT INTO Usuarios VALUES('$username', '$password', '$name','$lastname', '$email', $years,  '$web')");

            mysqli_close($database); 

            header('Location: index.php?done');
            
            mail_sender($username, $password, $email);
        };
}



?>
