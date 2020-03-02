 <?php
    function rdo($dao, $target_method,$type,$params="",$page="") {
            try{
                $rdo = $dao->$target_method($params!==""?$params:"");
                $name=get_object_vars($rdo);
            }catch (Exception $e){
                $callback = 'index.php?page=503';
                die('<script>window.location.href="'.$callback .'";</script>');
            }
            switch ($type) {
                case 'multiple':
                    if (!$rdo) {
                        return json_encode("error");
                    }else{
                        $dinfo = array();
                        foreach ($rdo as $row) {
                            array_push($dinfo, $row);
                        }
                        return json_encode($dinfo);
                    }
                    
                case "with_page":
                    if(!$rdo){
                        $callback = 'index.php?page=503';
                        die('<script>window.location.href="'.$callback .'";</script>');
                    }else{
                        include($page);
                    }
                break;
                default:
                    return json_encode($rdo); 
                    
            }
            
        }