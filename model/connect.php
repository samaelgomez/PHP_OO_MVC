<?php
	class connect{
		public static function con(){
			$host = '127.0.0.1';
    		$user = "root";
    		$pass = "12345678";
    		$db = "games";
    		$port = 3306;
    		$tabla="videogames";
    		
    		$conexion = new mysqli($host, $user, $pass, $db);
			return $conexion;
		}
		public static function close($conexion){
			$conexion->close();
		}
	}