<?php
session_start();
include('dbconfig.php');


if(isset($_POST['save_data']))
{
    $nombre = $_POST['Nombre'];
    $apPaterno = $_POST['ApPaterno'];
    $carrera = $_POST['Carrera'];
    $NumCuenta = $_POST['NumCuenta'];
    $Contraseña = $_POST['Contraseña'];

    $data =[
        'Nombre' => $nombre,
        'ApPaterno' => $apPaterno,
        'Carrera' => $carrera,
        'NumCuenta' => $NumCuenta,
        'admin' => true,
        'baja' => false,
        'contraseña' => $Contraseña
    ];

    echo $data;
    $ref = 'usuarios/1';
    $postData = $database ->getReference($ref)->set($data);

    if($postData){
       
        $_SESSION['status'] = 'No Data Inserted';
        header('Location:index.php');

    }
    else{
        $_SESSION['status'] = 'Data Not Inserted';
        header('Location:index.php');
    }

}

