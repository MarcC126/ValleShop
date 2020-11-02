<?php
	require_once("../controlador/conexion.php");
	require_once("../controlador/controlador.php");
	
	
	class Modelo{
		
		private $conn;
		
		function __construct( $conexion ){
			$this->conn = $conexion;
		}

		function select( $consulta ){ 
		    $this->total_consultas++;
		    $resultado = mysqli_query($this->conn, $consulta);
		    if(!$resultado){ 
		    	$error = 'MySQL Error: ' . mysqli_connect_error();
		    	
		    }
		    return $resultado;
		}
		
		function mostrarTablas( ){
			$sqlTablas = "SELECT TABLE_NAME as 'tabla' FROM INFORMATION_SCHEMA.tables ";
			$sqlTablas .= "WHERE TABLE_SCHEMA='sistema_archivos'";
			//Se ejecuta la consulta
			$resTablas = mysqli_query($this->conn, $sqlTablas);
			if( !$resTablas ){ 
		    	$error = 'MySQL Error: ' . mysqli_connect_error();
		    	$alert = 'danger';
			}
			$resultado = array();
			while($row = mysqli_fetch_array($resTablas))
			{
				$resultado[] = $row['tabla'];
			}
			return $resultado;
		}
		
		function agregarUsuario($params){
			$error = "";
			$valor = "";
			$nombre = $params["nombre"];
			$apellido = $params["apellido"];
			$correo = $params["correo"];
			$nomUsuario = $params["nomUsuario"];
			$pass = $params["pass"];

			$query = "INSERT INTO `usuarios`(`NOMBRE`, `APELLIDO`, `CORREO`, `NOMUSUARIO`, `PASS`) VALUES ('".$nombre."', '".$apellido."', '".$correo."', '".$nomUsuario."', '".$pass."')";

			if(!empty($nombre) && !empty($apellido) && !empty($correo)){
				if(! $this->conn->query($query)){
					$error = 'Ocurrio un error ejecuntando el query [' . $this->conn->error . ']';
				}
				$valor = $this->conn->affected_rows;
			}
			$resul[] = $valor;
			$resul[] = $error;
			return $resul;
		}

		function validarUsuario($params){
			$error = "";
			$valor = "";
			$nomUsuario = $params["nomUsuario"];
			$pass = $params["pass"];

			$query = "SELECT * FROM `usuarios` WHERE NOMUSUARIO = '".$nomUsuario."' AND PASS = '".$pass."';";

			$resultado = mysqli_query($this->conn, $query);
			if(mysqli_num_rows($resultado) != 0){
				$valor = "OK";
				session_start();
				$_SESSION["logueado"] = TRUE;

				while($row = mysqli_fetch_array($resultado)){
					$_SESSION["nomUsuario"] = $row['NOMUSUARIO'];
					$_SESSION["pass"] = $row['PASS'];
				}
			}
			$resul[] = $valor;
			$resul[] = $error;
			return $resul;
		}
	}
		