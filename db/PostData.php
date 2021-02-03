<?php
session_start();
//Se incluye la estancia de la basa de datos con nombre $database
include('dbconfig.php');
use Kreait\Firebase\Database\Transaction;


//Se revisa de donde vino la peticion de POST
if(isset($_POST['admin_save_user']))
{
    //Se toman los datos del POST y se juntan en una sola variable
    //------------------------------------------------------------
    $nombre = $_POST['Nombre'];
    $apPaterno = $_POST['ApPaterno'];
    $carrera = $_POST['Carrera'];
    $NumCuenta = $_POST['NumCuenta'];
    $Contraseña = $_POST['Contraseña'];

    if ($_POST['TipoUsuario'] == "Alumno") {
        $admin = false;
    }else{
        $admin = true;
    }

    $data =[
        'Nombre' => $nombre,
        'ApPaterno' => $apPaterno,
        'Carrera' => $carrera,
        'NumCuenta' => $NumCuenta,
        'admin' => $admin,
        'baja' => false,
        'contraseña' => $Contraseña
    ];
    //-------------------------------------------------------------

    //Se hace la referencia a la coleccion usuarios con un ID determinado por el Numero de Cuenta
    $ref = 'usuarios/' . $NumCuenta;
    //Se usa la funcion set para mover los datos a internet
    $postData = $database ->getReference($ref)->set($data);


    //Dependiendo del resultado se redirige al usuario a una nueva pantalla
    //----------------------------------------------------------------------
    if($postData){

        $_SESSION['status'] = 'Data Inserted';
        header('Location:..\Usuarios.php');

    }
    else{
        $_SESSION['status'] = 'Data Not Inserted';
        header('Location:..\Usuarios.php');
    }
    //-----------------------------------------------------------------------

}

if(isset($_POST['delete_user']))
{
    $NumCuenta = $_POST['NumCuenta'];

    $ref = 'usuarios/'. $NumCuenta;

    $toBeDeleted = $database->getReference($ref);
    $database->runTransaction(function (Transaction $transaction) use ($toBeDeleted) {

        $transaction->snapshot($toBeDeleted);

        $transaction->remove($toBeDeleted);
    });

    if($toBeDeleted){

        $_SESSION['status'] = 'Data Inserted';
        header('Location:..\Usuarios.php');

    }
    else{
        $_SESSION['status'] = 'Data Not Inserted';
        header('Location:..\Usuarios.php');
    }
}

//POST de Equipos
//Se revisa de donde vino la peticion de POST
if(isset($_POST['admin_save_equip']))
{
    //Se toman los datos del POST y se juntan en una sola variable
    //------------------------------------------------------------
    $estado = $_POST['Estado'];
    $marca = $_POST['Marca'];
    $modelo = $_POST['Modelo'];
    $numSerie = $_POST['NumSerie'];
    $tipo = $_POST['Tipo'];

    $data =[
        'Estado' => $estado,
        'Marca' => $marca,
        'Modelo' => $modelo,
        'NumSerie' => $numSerie,
        'Tipo' => $tipo,
        'baja' => false,
    ];
    //-------------------------------------------------------------

    //Se hace la referencia a la coleccion usuarios con un ID determinado por el Numero de Cuenta
    $ref = 'equipos/' . $numSerie;
    //Se usa la funcion set para mover los datos a internet
    $postData = $database ->getReference($ref)->set($data);

    if($postData){

        $_SESSION['status'] = 'Data Inserted';
        header('Location:..\Equipos.php');

    }
    else{
        $_SESSION['status'] = 'Data Not Inserted';
        header('Location:..\Equipos.php');
    }
}

if(isset($_POST['delete_equip']))
{
    $numSerie = $_POST['NumSerie'];

    $ref = 'equipos/'. $numSerie;

    $toBeDeleted = $database->getReference($ref);
    $database->runTransaction(function (Transaction $transaction) use ($toBeDeleted) {

        $transaction->snapshot($toBeDeleted);

        $transaction->remove($toBeDeleted);
    });

    if($toBeDeleted){

        $_SESSION['status'] = 'Data Inserted';
        header('Location:..\Equipos.php');

    }
    else{
        $_SESSION['status'] = 'Data Not Inserted';
        header('Location:..\Equipos.php');
    }
}
