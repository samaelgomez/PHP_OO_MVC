<?php
	switch($_GET['page']){
		case "homepage";
			include("module/inicio/view/inicio.html");
			break;
		case "controller_user";
			include("module/user/controller/".$_GET['page'].".php");
			break;
		case "shop_and_details";
			include("module/shop/view/".$_GET['page'].".html");
			break;
		case "services";
			include("module/services/".$_GET['page'].".php");
			break;
		case "aboutus";
			include("module/aboutus/".$_GET['page'].".php");
			break;
		case "contactus";
			include("module/contact/view/".$_GET['page'].".html");
			break;
		case "404";
			include("view/inc/error".$_GET['page'].".php");
			break;
		case "503";
			include("view/inc/error".$_GET['page'].".php");
			break;
		default;
			include("module/inicio/view/inicio.html");
			break;
	}
?>