<div id="contenido">
    <form autocomplete="on" method="post" name="update_user" id="update_user" onsubmit="return validate();" action="index.php?page=controller_user&op=update">
        <h1>Modify game details</h1>
        <table border='0'>
            <tr>
                <td>Name: </td>
                <td><input type="text" id="name" name="name" placeholder="Name" value="<?php echo $name['name'];?>"/></td>
            </tr>
            
            <tr>
                <td>Pegi: </td>
                <td>
                    <?php
                        if ($name['pegi']==3){
                    ?>
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="3" checked/>3
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="7"/>7
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="12"/>12
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="16"/>16
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="18"/>18
                    <?php    
                        }elseif ($name['pegi']==7){
                    ?>
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="3"/>3
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="7" checked/>7
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="12"/>12
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="16"/>16
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="18"/>18
                    <?php   
                        }elseif ($name['pegi']==12){
                    ?>
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="3"/>3
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="7"/>7
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="12" checked/>12
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="16"/>16
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="18"/>18
                    <?php   
                        }elseif ($name['pegi']==16){
                    ?>
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="3"/>3
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="7"/>7
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="12"/>12
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="16" checked/>16
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="18"/>18
                    <?php   
                        }else{
                    ?>
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="3"/>3
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="7"/>7
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="12"/>12
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="16"/>16
                        <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="18" checked/>18
                    <?php   
                        }
                    ?>
                </td>
            </tr>
            
            <tr>
                <td>Edition: </td>
                <td><select id="edition" name="edition" placeholder="Edition">
                    <?php
                        if($name['edition']=="standard"){
                    ?>
                        <option value="standard" selected>Standard</option>
                        <option value="deluxe">Deluxe</option>
                        <option value="collectionist">Collectionist</option>
                    <?php
                        }elseif($name['edition']=="deluxe"){
                    ?>
                        <option value="standard">Standard</option>
                        <option value="deluxe" selected>Deluxe</option>
                        <option value="collectionist">Collectionist</option>
                    <?php
                        }else{
                    ?>
                        <option value="standard">Standard</option>
                        <option value="deluxe">Deluxe</option>
                        <option value="collectionist" selected>Collectionist</option>
                    <?php
                        }
                    ?>
                    </select></td>
            </tr>
            
            <tr>
                <td>Languages: </td>
                <?php
                    $afi=explode(":", $name['languages']);
                ?>
                <td>
                    <?php
                        $busca_array=in_array("english", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "languages[]" name="languages[]" value="english" checked/>English
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "languages[]" name="languages[]" value="english"/>English
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("italian", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "languages[]" name="languages[]" value="italian" checked/>Italian
                    <?php
                        }else{
                    ?>
                        <input type="checkbox" id= "languages[]" name="languages[]" value="italian"/>Italian
                    <?php
                        }
                    ?>
                    <?php
                        $busca_array=in_array("spanish", $afi);
                        if($busca_array){
                    ?>
                        <input type="checkbox" id= "languages[]" name="languages[]" value="spanish" checked/>Spanish</td>
                    <?php
                        }else{
                    ?>
                    <input type="checkbox" id= "languages[]" name="languages[]" value="spanish"/>Spanish</td>
                    <?php
                        }
                    ?>
                </td>
            </tr>
            
            <tr>
                <td><input type="submit" name="update" id="update"/></td>
                <td align="right"><a href="index.php?page=controller_user&op=list">Back</a></td>
            </tr>
        </table>
    </form>
</div>