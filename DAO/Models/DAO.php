<?php
	class DAO extends connect{
        function multiple_return_query($sql){
			$conexion = $this->con();
            $res = mysqli_query($conexion, $sql);
            $this->close($conexion);
            return $res;
		}
        function simple_query($sql){
            $conexion = $this->con();
            $res = mysqli_query($conexion, $sql)->fetch_object();
            $this->close($conexion);
			return $res;
		}     

	}