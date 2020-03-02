<?php
    $path = $_SERVER['DOCUMENT_ROOT'] . '/egames/';
    include($path . "module/inicio/model/DAO_home.php");
    include($path . "DAO/controllers/master_controller.php");
    
    $data ="";
    // echo json_encode(count($_POST));
    if(count($_POST)!==0){
        $data=$_POST['data'];
    }

    if ($_GET['op'] ) {
        echo rdo(new DAO_home(), //$dao
            $_GET['op'],//$target_method
            "multiple",//$type
            $data//$params
            //$page
           );
    }else{
        include("view/inc/error404.php");
    }