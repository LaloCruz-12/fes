<?php
session_start();
//Se incluye la estancia de la basa de datos con nombre $database
include('dbconfig.php');
include('GetData.php');
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
//POST Registrar usuario

if(isset($_POST['save_user']))
{
    //Se toman los datos del POST y se juntan en una sola variable
    //------------------------------------------------------------
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
        'admin' => false,
        'baja' => false,
        'contraseña' => $Contraseña
    ];

    
    //Se hace la referencia a la coleccion usuarios con un ID determinado por el Numero de Cuenta
    $ref = 'usuarios/' . $NumCuenta;
    //Se usa la funcion set para mover los datos a internet
    $postData = $database ->getReference($ref)->set($data);


    //Dependiendo del resultado se redirige al usuario a una nueva pantalla
    //----------------------------------------------------------------------
    if($postData){

        $_SESSION['status'] = 'Data Inserted';
        header('Location:..\index.php');

    }
    else{
        $_SESSION['status'] = 'Data Not Inserted';
        header('Location:..\index.php');
    }
    //--
}

if(isset($_POST['new_prestamo']))
{
    //Se toman los datos del POST y se juntan en una sola variable
    //------------------------------------------------------------
    $NumSerie = $_POST['NumSerie'];
    $HoraInicio = $_POST['Hora'];
    $NumHoras = $_POST['NumHoras'];
    $NumCuenta = $_COOKIE['NumCuenta'];
    $fecha = date("d-m-Y");


    //Se calcula la hora de regreso basado en la hora de inicio
    //------------------------------------------------------------
    $NuevaHora = (substr($HoraInicio, 0, 2)) + $NumHoras;
    $minutos = substr($HoraInicio, 2, 3);
    $HoraEntrega = $NuevaHora . $minutos;  
    //-------------------------------------------------------------

    //Se calcula el id del prestamo
    //------------------------------------------------------------
    $nPrestamos = $database -> getReference('prestamos')->getSnapshot()->numChildren();
    //Numero de prestamos + la fecha 
    $id_prestamo = ($nPrestamos+1) . date("dmy");

    $data =[
        'id_prestamo' => $id_prestamo,
        'estado' => "En Curso",
        'equipoP' => $NumSerie,
        'usuarioP' => $NumCuenta,
        'h_inicio' => $HoraInicio,
        'h_entrega' => $HoraEntrega,
        'fecha' => $fecha,
    ];

    if($equipos[$NumSerie]['Estado'] == "Disponible"){
        $updateEquipo = $database->getReference('equipos/'.$NumSerie)->update(['Estado' => "En Prestamo"]);

        $refPrestamo = 'prestamos/' . $id_prestamo;

        $postData = $database ->getReference($refPrestamo)->set($data);
    }
    else if($equipos[$NumSerie]['Estado'] == "En Prestamo"){
        $postData = "EquipoNoDisponible";
    }
    else{

    }

    //Dependiendo del resultado se redirige al usuario a una nueva pantalla
    //----------------------------------------------------------------------
    if($postData == "EquipoNoDisponible"){

        setcookie('id_Prestamo', "EquipoNoDisponible", 0, '/', false);
        header('Location:..\PRESTAMOS1.php');

    }
    elseif ($postData) {
        
        setcookie('id_Prestamo', $id_prestamo, 0, '/', false);
        $_SESSION['status'] = 'Data Inserted';
        header('Location:..\PRESTAMOS1.php');
    }
    else{
        setcookie('id_Prestamo', "Fallo", 0, '/', false);
        $_SESSION['status'] = 'Data Not Inserted';
        header('Location:..\PRESTAMOS1.php');
    }
    //----------------------------------------------------------------------
}

if(isset($_POST['fin_prestamo']))
{
    $prestamo = $prestamos[$_POST['Id_Prestamo']];
    $id_equipo = $prestamo['equipoP'];

    $updateEquipo = $database->getReference('equipos/'.$id_equipo)->update(['Estado' => "Disponible"]);
    $updatePrestamo = $database->getReference('prestamos/'.$_POST['Id_Prestamo'])->update(['estado' => "Finalizado"]);

    if ($postData) {
        
    
        $_SESSION['status'] = 'Data Inserted';
        header('Location:..\PRESTAMOS.php');
    }
    else{
        
        $_SESSION['status'] = 'Data Not Inserted';
        header('Location:..\PRESTAMOS.php');
    }
}