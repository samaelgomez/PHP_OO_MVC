<?php

function validate_game(){
    $dao = new DAO_user();
    $rdo = $dao->select_user($_POST["name"]);
    return $rdo;
}

function validate(){
    $name=$_POST['name'];
    $pegi=$_POST['pegi'];
    $edition=$_POST['edition'];
    $languages=$_POST['languages'];
    $check=true;
    $error='';

    try{
        if(validate_game()){
            echo '<script language="javascript">alert("That game is already in the database...")</script>';
            $check = false;
        }
    }catch (Exception $e){
        $error = '';
    }

    return $check;

}