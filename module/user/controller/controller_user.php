<?php
    $path = $_SERVER['DOCUMENT_ROOT'] . '/egames/';
    include($path . "module/user/model/DAO.php");
    include($path . "DAO/controllers/master_controller.php");

    if (isset($_SESSION["tiempo"])) {  
		$_SESSION["tiempo"] = time();
	}
    
    switch($_GET['op']){
        case 'list';
            try{
                $dao = new DAO_user();
            	$rdo = $dao->select_all_user();
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/user/view/list_user.php");
    		}
            break;

        case 'list_datatable';
            try{
                $dao = new DAO_user();
            	$rdo = $dao->select_all_user();
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
                include("module/user/view/list_user_datatable.php");
    		}
            break;
            
        case 'create';
            include("module/user/model/validate.php");
            
            $check = true;
            
            if (isset($_POST['create'])){
                $check=validate();
                
                if ($check){
                    $_SESSION['name']=$_POST;
                    try{
                        $dao = new DAO_user();
    		            $rdo = $dao->insert_user($_POST);
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
            			echo '<script language="javascript">alert("Registered in database successfully.")</script>';
            			$callback = 'index.php?page=controller_user&op=list';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }
            }
            include("module/user/view/create_user.php");
            break;
            
        case 'update';
            include("module/user/model/validate.php");
            
            $check = true;
            
            if (isset($_POST['update'])){
                $check=validate();
                
                if ($check){
                    $_SESSION['name']=$_POST;
                    try{
                        $dao = new DAO_user();
    		            $rdo = $dao->update_user($_POST);
                    }catch (Exception $e){
                        $callback = 'index.php?page=503';
        			    die('<script>window.location.href="'.$callback .'";</script>');
                    }
                    
		            if($rdo){
            			echo '<script language="javascript">alert("Database updated correctly.")</script>';
            			$callback = 'index.php?page=controller_user&op=list';
        			    die('<script>window.location.href="'.$callback .'";</script>');
            		}else{
            			$callback = 'index.php?page=503';
    			        die('<script>window.location.href="'.$callback .'";</script>');
            		}
                }
            }
            
            try{
                $dao = new DAO_user();
            	$rdo = $dao->select_user($_GET['id']);
            	$name=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
			    die('<script>window.location.href="'.$callback .'";</script>');
            }
            
            if(!$rdo){
    			$callback = 'index.php?page=503';
    			die('<script>window.location.href="'.$callback .'";</script>');
    		}else{
        	    include("module/user/view/update_user.php");
    		}
            break;
            
        case 'read';
            echo rdo(new DAO_user(), //$dao
                     "select_user",//$target_method
                     "with_page",//$type
                     $_GET['id'],//$params
                     "module/user/view/read_user.php"//$page
                    );
            // try{
            //     $dao = new DAO_user();
            // 	$rdo = $dao->select_user($_GET['id']);
            // 	$name=get_object_vars($rdo);
            // }catch (Exception $e){
            //     $callback = 'index.php?page=503';
			//     die('<script>window.location.href="'.$callback .'";</script>');
            // }
            // if(!$rdo){
    		// 	$callback = 'index.php?page=503';
    		// 	die('<script>window.location.href="'.$callback .'";</script>');
    		// }else{
            //     include("module/user/view/read_user.php");
    		// }
            break;
            
        case 'delete';
            if (isset($_POST['delete'])){
                try{
                    $dao = new DAO_user();
                	$rdo = $dao->delete_user($_GET['name']);
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
    			    die('<script>window.location.href="'.$callback .'";</script>');
                }
            	
            	if($rdo){
        			echo '<script language="javascript">alert("Removed from database successfully.")</script>';
        			$callback = 'index.php?page=controller_user&op=list';
    			    die('<script>window.location.href="'.$callback .'";</script>');
        		}else{
        			$callback = 'index.php?page=503';
			        die('<script>window.location.href="'.$callback .'";</script>');
        		}
            }
            
            include("module/user/view/delete_user.php");
            break;

        case 'delete_all';
            if (isset($_POST['delete_all'])){
                try{
                    $dao = new DAO_user();
                    $rdo = $dao->delete_all();
                }catch (Exception $e){
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
                
                if($rdo){
                    echo '<script language="javascript">alert("Removed from database successfully.")</script>';
                    $callback = 'index.php?page=controller_user&op=list';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }else{
                    $callback = 'index.php?page=503';
                    die('<script>window.location.href="'.$callback .'";</script>');
                }
            }
            
            include("module/user/view/delete_all.php");
            break;

        case 'read_modal';
            try{
                $dao = new DAO_user();
                $rdo = $dao->select_user($_GET['modal']);
            }catch (Exception $e){
                echo json_encode("error");
                exit;
            }
            if(!$rdo){
                echo json_encode("error");
                exit;
            }else{
                $name=get_object_vars($rdo);
                // print_r($name);
                echo json_encode($name);
                //echo json_encode("error");
                exit;
            }
            break;

        case 'list_order':
				require("module/user/view/list_order.php");
			break;
			
		case 'datatable':
            echo rdo(new DAO_user(), //$dao
            "select_order",//$target_method
            "multiple"//$type
            //$params
            //$page
           );
			break;

        default;
            include("view/inc/error404.php");
            break;
    }