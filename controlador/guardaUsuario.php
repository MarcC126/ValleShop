<?php
    @session_start();
    require_once("../modelo/modelo.php");

    //Recibir la contraseña del input mediante POST
    $pass = $_POST['pass'];

    $passEncriptada = password_hash ($pass, PASSWORD_DEFAULT, ['cost' => 10]);

    $params = array(
        "nombre" => $_POST['nombre'],
        "apellido" => $_POST['apellido'],
        "correo" => $_POST['correo'],
        "nomUsuario" => $_POST['nomUsuario'],
        "pass" => $passEncriptada,
    );

    //Instancia y conexión con la BD
    $db = Database::getInstance();
    $conn = $db->getConnection();
    $sesion = new Modelo($conn);

    //Llamar a la función 'agregaUsuario' que se encuentra en el modelo
    list ($valor, $error) = $sesion->agregarUsuario($params);
    if(empty($valor)){
        if(!empty($error)) $_SESSION["error"] = $error;
    } else {
        echo "<script>alert('Su usuario fue registrado existosamente');
            window.location.href = '../vista/login.html';
            </script>";
    }

    //print_r($params);
?>