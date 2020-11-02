<?php
    session_start();

    //borrar los datos de la sesión actual
    session_destroy();

    //Redireccionar al index
    header("Location: ../vista/index.html");
?>