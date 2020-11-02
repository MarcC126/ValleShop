<?php
    session_start();
    require_once("../controlador/controlador.php");

    if(isset($_SESSION["nomUsuario"])){
        $nomUsuario = $_SESSION["nomUsuario"]; //Obtener el nombre del usuario que accedio al sistema
    } else{
        session_destroy();
        echo "<script>alert('No has iniciado sesión');
            window.location.href = '../vista/login.html';
            </script>";
    }
?>

<!DOCTYPE html>
<HTML>
    <HEAD>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1">
        <link rel="stylesheet" type="text/css" href="css/index.css"/>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=McLaren&display=swap" rel="stylesheet">
        <script src="prefix.js"></script>
        <link rel="shortcut icon" href="img/logoParroquia2.png">    <!--Icono para la pestaña-->
        <title>ValleShop</title>
    </HEAD>
    <BODY>
      <div class="contenedor">  <!--Contenedor principal-->
        <header>  <!--Inicio del header-->
          <div class="logo">
            <img src="img/logoParroquia2.png" width="90px" alt="">  <!--Imagen del logo (parte superior izquierda)-->
            <a href="#">ValleShop</a> <!--Letras del logo (parte superior izquierda)-->
          </div>
          <nav> <!--Menú de navegación-->
            <a href="#">Mi perfil</a>
            <a href="#">Mis pedidos</a>
            <a href="../controlador/logout.php">Salir</a>

          </nav>
        </header> <!--Fin del header-->
      <div class="imagenFondo"> <!--Primera imagen, después del header-->
        <p>
          ValleShop,
          "Encuentra cualquier servicio o producto a un clic de distancia"  <!--Texto sobre la imagen-->
        </p>
      </div>

        <div class="tarjetaPrincipal">  <!--Tarjeta principal informativa-->
          
          <div class="txtTarjetaPrincipal">
            <h4>Seleccione la categoría del servicio o producto que busca:</h4> <!--Título de la tarjeta principal informativa-->
            <div class="busqueda">
              <select name="cbBusqueda" id="cbCategorias">
                <option value="Alimentos">Alimentos</option>
                <option value="Oficios">Oficios</option>
                <option value="Profesiones">Profesiones</option>
                <option value="Productos">Productos</option>
              </select>
              <form method="get" action="#" target="_blank" id="formBusqueda">
                <input id="txtBusqueda" type="search" name="q" placeholder="Término a buscar">
                <input id="btnBusqueda" type="submit" value="Buscar">
              </form>
            </div>
          </div>
        </div>

      <div class="esqueletoTarjetas"> <!--Contenedor de las tarjetas de la diarrea-->
        <div class="tarjetas">   <!--Tarjertas de la diarrea (forma de tarjeta)-->
          <div class="imgTerjeta">
            <img src="img/hamburguesa-elsabor.jpg">  <!--Imagen de la diarrea-->
          </div>

          <div class="textoTarjeta">  <!--Texto en las tarjetas de diarrea-->
            <h3>EL SABOR</h3>
            <p>
              Hamburguesas de res, pollo, camarón, arrachera y mixtas.
              Palomitas de pollo.
              Papas Gajo.
              Papas a la francesa.
              Alitas.
              Hot dogs.
            </p>
          </div>
          <div class="precioTarjeta">  <!--Texto en las tarjetas de diarrea-->
            <h3>Hamburguesas desde:</h3>
            <p>
              $45
            </p>
          </div>
        </div>

        <div class="tarjetas">   <!--Tarjertas de las llaves de agua (forma de tarjeta)-->
          <div class="imgTerjeta">
            <img src="img/tacos-GalloTaqueria.jpg">  <!--Imagen de las llaves de agua-->
          </div>

          <div class="textoTarjeta">  <!--Texto en las tarjetas de los vasos con agua-->
            <h3>Gallo Taquería.</h3>
            <p>
              Tacos de bistec, al pastor y maciza.
              Tortas.
              Quesadillas.
              Costras de queso.
              Bebidas calientes y frías.
            </p>
          </div>
          <div class="precioTarjeta">  <!--Texto en las tarjetas de diarrea-->
            <h3>Tacos desde:</h3>
            <p>
              $7
            </p>
          </div>
        </div>

        <div class="tarjetas">  <!--Tarjertas de los niños bebiendo agua (forma de tarjeta)-->
          <div class="imgTerjeta">
            <img src="img/dentista - deal health.jpg">  <!--Imagen de los niños bebiendo agua-->
          </div>

          <div class="textoTarjeta">  <!--Texto en las tarjetas de los niños bebiendo agua-->
            <h3>Dental Health</h3>
            <p>
              Odontología integral al cuidado de tu sonrisa” Somos un consultorio 
              dental que está diseñado para brindarte el mejor cuidado para tu boca.
            </p>
          </div>
          <div class="precioTarjeta">  <!--Texto en las tarjetas de diarrea-->
            <h3>Consultas desde:</h3>
            <p>
              $500
            </p>
          </div>
        </div>

        <div class="tarjetas">  <!--Tarjertas de la llave de agua (forma de tarjeta)-->
          <div class="imgTerjeta">
            <img src="img/salon de fiestas- san jose.jpg">  <!--Imagen de la llave de agua-->
          </div>

          <div class="textoTarjeta">  <!--Texto en las tarjetas de la llave de agua-->
            <h3>San José - Salón de fiestas</h3>
            <p>
              Salón de fiestas para cualquier tipo de evento social. 
            </p>
          </div>
          <div class="precioTarjeta">  <!--Texto en las tarjetas de diarrea-->
            <h3>Precios desde:</h3>
            <p>
              $3,500
            </p>
          </div>
        </div>
      </div>      

      </div>
      <footer>
        <div id="contenido">
          <a href="#">ValleShop, derechos reservados</a>
      </div>
        <div id="iconos">   <!---Iconos de la parte inferior izquierda-->
          <ul>
              <il><a href="URL" target="_blank"><img alt="Siguenos en Facebook" height="25" width="25" src="img/facebook.png" title="Siguenos en Facebook"/></a></il>   <!--icono facebook-->
              <il><a href="URL" target="_blank"><img alt="Siguenos en Instagram" height="25" width="25" src="img/instagram.png" title="Siguenos en Instagram"/></a></il>  <!--icono instagram-->
              <il><a href="URL" target="_blank"><img alt="Siguenos en Twitter" height="25" width="25" src="img/twitter.png" title="Siguenos en Twitter"/></a></il>    <!--icono twitter-->
          </ul>
      </footer>
    </BODY>
</HTML>