<?php
	$path = $_SERVER['DOCUMENT_ROOT'] . '/egames/';
    include($path . "model/connect.php");
    include($path . "DAO/Models/DAO.php");
	class DAO_user extends DAO{
		function insert_user($data){
        	$name=$data[name];
        	$pegi=$data[pegi];
        	$edition=$data[edition];
        	foreach ($data[languages] as $index) {
        	    $languages=$languages."$index:";
        	}
        	$sql = " INSERT INTO videogames (name, pegi, edition, languages)"
        		. " VALUES ('$name', '$pegi', '$edition', '$languages')";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function select_all_user(){
			$sql = "SELECT * FROM videogames ORDER BY name ASC";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}
		
		function select_user($name){
			$sql = "SELECT * FROM videogames WHERE name='$name'";
			// echo $sql;
			// $conexion = connect::con();
            // $res = mysqli_query($conexion, $sql)->fetch_object();
            // connect::close($conexion);
            return $this->simple_query($sql);
		}
		
		function update_user($data){
        	$name=$data[name];
        	$pegi=$data[pegi];
        	$edition=$data[edition];
        	foreach ($data[languages] as $index) {
        	    $languages=$languages."$index:";
        	}
        	
        	$sql = " UPDATE videogames SET name='$name', pegi='$pegi', edition='$edition', languages='$languages' WHERE name='$name'";
            
            $conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
			return $res;
		}
		
		function delete_user($name){
			$sql = "DELETE FROM videogames WHERE name='$name'";
			
			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}

		function delete_all(){
			$sql = "DELETE FROM videogames";

			$conexion = connect::con();
            $res = mysqli_query($conexion, $sql);
            connect::close($conexion);
            return $res;
		}

		function select_order(){
			$sql = "SELECT name, pegi, edition, languages FROM videogames";
			$connection = connect::con();
			$res = mysqli_query($connection, $sql);
			connect::close($connection);
			return $res;
		}

	}