<?php
    //Requerimiento obligatorio de composer
    require '..\vendor\autoload.php';

    //Dependencia que usaremos 
    use Kreait\Firebase\Factory;


    //Se crea una estancia de la base de datos 
    $factory = (new Factory)
        //Primero se otorga la llave privada necesaria para acceder a la base de datos, se obtiene desde el proyecto de firebase
        ->withServiceAccount('key\tecnofes-spc-firebase-adminsdk-3o6ct-af4dc76ed1.json')
        //La base de datos tiene una URL que actua como una API es necesario especificar esa URL
        ->withDatabaseUri('https://tecnofes-spc-default-rtdb.firebaseio.com/');

    //Se crea la conexion a la base de datos y esta es la variable que se va a importar en otros documentos
    $database = $factory->createDatabase();

?>