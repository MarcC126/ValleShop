<?php
    @session_start();
    require_once("../modelo/modelo.php");

    $params = array(
        "nomUsuario"=>$_POST['nomUsuario'],
        "pass"=>$_POST['pass'],
    );

    //print_r($params); die();

    //instancia y conexión db
    $db = Database::getInstance();
    $conn = $db->getConnection();
    $sesion = new Modelo($conn);

    list ($valor, $error) = $sesion->validarUsuario($params);
    if(empty($valor)){
        echo "<script>alert('El usuario o contraseña son incorrectos');
            window.location.href = '../vista/login.html';
            </script>";
    } else{
        echo "<script>alert('Bienvenido');
            window.location.href = '../vista/homePageR.php';
            </script>";
    }
?>