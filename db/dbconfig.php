<?php
    require '..\vendor\autoload.php';

    use Kreait\Firebase\Factory;
    use Kreait\Firebase\ServiceAccount;

    $factory = (new Factory)
        ->withServiceAccount('key\tecnofes-spc-firebase-adminsdk-3o6ct-af4dc76ed1.json')
        ->withDatabaseUri('https://tecnofes-spc-default-rtdb.firebaseio.com/');

    $database = $factory->createDatabase();

?>