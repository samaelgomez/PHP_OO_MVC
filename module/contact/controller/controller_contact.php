<?php
    $path = $_SERVER['DOCUMENT_ROOT'] . '/egames/';
    include($path . "module/user/model/DAO_home.php");
    
    session_start();

    switch($_GET['op']){
            case 'contact';
                include("module/contact/view/contactus.html");
                break;
            }