<?php
	$path = $_SERVER['DOCUMENT_ROOT'] . '/egames/';
    include($path . "model/connect.php");
    include($path . "DAO/Models/DAO.php");

    function filtros($data) {
        // echo json_encode($data);

        $final_where = "";
        $counter = 0;
        foreach ($data as $key => $value) {
            if (count($value)!==0) {
                $counter = count($value);
                foreach ($value as $key2 => $value2) {
                    $counter--;
                    $and_or = $counter===0?"AND":"OR";
                    $final_where .=" ". $key."= '$value2' $and_or";
                }
            }
        }
        return substr($final_where,0,-3);
    }
    
	class DAO_home extends DAO{
        function carousel(){
            $sql = "SELECT image_path FROM carousel";
            return $this->multiple_return_query($sql);
        }
        function categories(){
            $sql = "SELECT * FROM categories";
            return $this->multiple_return_query($sql);
        }
        function get_products($data){
            $sql = "SELECT categories.product_category as CategoryName, videogames.name as VideogameName, videogames.pegi as Pegi,
            videogames.edition as Edition, videogames.languages as Languages, videogames.videogame_image as VideogameImage
            FROM category_list 
            INNER JOIN videogames 
                ON category_list.videogame=videogames.name
            INNER JOIN categories 
                ON category_list.category_id=categories.id";
                if(count($_POST)!==0){
                    if($data["filters"]){
                        // $categories = $data["filters"]["categoria"];
                        $concat_sql = filtros($data["filters"]);
                        $sql .= " WHERE ".$concat_sql ;
                        
                    }
                }
            
            // echo json_encode($sql);
            // echo json_encode($this->multiple_return_query($sql));
            return $this->multiple_return_query($sql);
        }
    }