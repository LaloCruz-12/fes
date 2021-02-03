<?php
include('GetData.php');
session_start();


if(isset($_POST['log_in'])){


    if (isset($_POST['NumCuenta'])) {
        if(isset($usuarios[$_POST['NumCuenta']])){
            if ($usuarios[$_POST['NumCuenta']]['contraseña'] == $_POST['password']) {
                if($usuarios[$_POST['NumCuenta']]['admin'] == true ){
                    setcookie('TipoUser', "admin", 0, '/', false);
                    setcookie('NumCuenta', $usuarios[$_POST['NumCuenta']]['NumCuenta'], 0, '/', false);
                }
                else{
                    setcookie('TipoUser', "Alumno", 0, '/', false);
                    setcookie('NumCuenta', $usuarios[$_POST['NumCuenta']]['NumCuenta'], 0, '/', false);
                }

            }
        }
    }
    header('Location:..\index.php');
}

if(isset($_POST['log_out'])){

    setcookie('TipoUser', "", 0, '/', false);
    setcookie('NumCuenta', "", 0, '/', false);

    
    header('Location:..\index.php');
}
?>