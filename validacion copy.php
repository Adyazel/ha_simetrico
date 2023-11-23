<?php

include('connetion.php');

$info =[];
$data = [];

$pass = $_POST['pass'];
$correo = $_POST['correo'];

$queryList = "select * from usuarios where correo = '".$correo."';";
$rsList = mysqli_query($conn,$queryList);
$rowsList = mysqli_fetch_assoc($rsList);
$totalRowsList = mysqli_num_rows($rsList);

if($totalRowsList>0){
    $passbd = $rowsList['pass'];
    $correo = $rowsList['correo'];
    
    do {

        array_push($data, array(
            'id' => $rowsList['id'], 
            'nombre' => $rowsList['nombre'],
            'correo' => $rowsList['correo']
        ));

    } while ($rowsList = mysqli_fetch_assoc($rsList));

}

if(sha1($pass) == $passbd){

$info = ['error' => false,
         'data' => $data,
         'access' => true];
header("Location: home.html");
}else{
    $info=['error' => false,
           'access' => false,
           'nombre' => 'no'];
header("Location: index.html");
}

?>