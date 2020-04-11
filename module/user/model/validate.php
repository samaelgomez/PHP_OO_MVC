<?php

function validate_game(){
    $dao = new DAO_user();
    $rdo = $dao->select_user($_POST["name"]);
    return $rdo;
}

function validate(){
    $check=true;
    $error='';

    try{
        if(validate_game()){
            $error = "That game is already in the database...";
            $check = false;
        }
    }catch (Exception $e){
        $error = '';
    }

    return $error;
}