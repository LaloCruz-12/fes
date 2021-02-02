<?php
    include('db\dbconfig.php');

    $usuarios = $database -> getReference('usuarios/') -> getSnapshot() -> getValue();
    $equipos = $database -> getReference('equipos/') -> getSnapshot() -> getValue();
    $prestamos = $database -> getReference('prestamos/') -> getSnapshot() -> getValue();
?>
