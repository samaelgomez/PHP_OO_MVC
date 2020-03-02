<?php
    function validate_nombre($texto){
        $reg="/^[a-zA-Z]*$/";
        return preg_match($reg,$teto);
    }
    
    function validate_sexo($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate_pais($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate_aficion($texto){
        if(!isset($texto) || empty($texto)){
            return false;
        }else{
            return true;
        }
    }
    
    function validate(){
        $check=true;
        
        $v_nombre=$_POST['nombre'];
        $v_sexo=$_POST['sexo'];
        $v_pais=$_POST['pais[]'];
        $v_aficion=$_POST['aficion[]'];

        $r_nombre=validate_nombre(v_nombre);
        $r_sexo=validate_sexo(v_sexo);
        $r_pais=validate_pais(v_pais);
        $r_aficion=validate_aficion(v_aficion);
        
        if($r_nombre !== 1){
            $error_nombre = " * El nombre introducido no es valido";
            $check=false;
        }else{
            $error_nombre = "";
        }
        if(!$r_sexo){
            $error_sexo = " * No has seleccionado ningun genero";
            $check=false;
        }else{
            $error_sexo = "";
        }
        if(!$r_pais){
            $error_pais = " * No has seleccionado ningun pais";
            $check=false;
        }else{
            $error_pais = "";
        }
        if(!$r_aficion){
            $error_aficion = " * No has seleccionado ninguna aficion";
            $check=false;
        }else{
            $error_aficion = "";
        }
        return check;
    }