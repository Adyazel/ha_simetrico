<?php

include('connetion.php');

$info =[];
$data = [];

$pass = $_POST['pass'];
$correo = $_POST['correo'];
$pass2 = $_POST['pass2'];
$nombre = $_POST['nombre'];


if($pass == $pass2){
    $queryList = "insert into usuarios(nombre, correo, pass, efirma) values('".$nombre."','".$correo."',sha1('".$pass."'), 'efirma');";
    echo $queryList;
    $rsList = mysqli_query($conn,$queryList);
}else{
    header("Location: register.html");
}

if($rsList){
header("Location: home.html");
}else{
header("Location: register.html");
} 

?>