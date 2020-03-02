<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>Game list</h3>
    	</div>
    	<div class="row">
    		<a href="index.php?page=controller_user&op=create"><img src="view/img/core-img/anadir.png"></a>
            <a href="index.php?page=controller_user&op=delete_all"><img src="view/img/core-img/delete_all.png"></a>
    		
    		<table>
                <tr>
                    <td width=125><b>Name</b></th>
                    <td width=125><b>Pegi</b></th>
                    <td width=125><b>Edition</b></th>
                    <th width=350><b>Action</b></th>
                </tr>
                <?php
                    if ($rdo->num_rows === 0){
                        echo '<tr>';
                        echo '<td align="center" colspan="3">There are no games...</td>';
                        echo '</tr>';
                    }else{
                        foreach ($rdo as $row) {
                       		echo '<tr>';
                    	   	echo '<td width=125>'. $row['name'] . '</td>';
                    	   	echo '<td width=125>'. $row['pegi'] . '</td>';
                    	   	echo '<td width=125>'. $row['edition'] . '</td>';
                            echo '<td width=350>';
                            // print ("<div class='Button_blue' id='".$row['name']."'>Read</div>");
                    	   	echo '<a class="Button_blue" href="index.php?page=controller_user&op=read&id='.$row['name'].'">Read</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_green" href="index.php?page=controller_user&op=update&id='.$row['name'].'">Update</a>';
                    	   	echo '&nbsp;';
                    	   	echo '<a class="Button_red" href="index.php?page=controller_user&op=delete&name='.$row['name'].'">Delete</a>';
                    	   	echo '</td>';
                    	   	echo '</tr>';
                        }
                    }
                ?>
            </table>
    	</div>
    </div>
</div>

<!-- modal window -->
<section id="user_modal" hidden>
    <div id="details_user">
        <div id="details">
            <div id="container">
                Name: <div id="name"></div></br>
                Pegi: <div id="pegi"></div></br>
                Edition: <div id="edition"></div></br>
                Languages: <div id="languages"></div></br>
            </div>
        </div>
    </div>
</section>

<!-- Popper js -->
<script src="view/js/bootstrap/popper.min.js"></script>
		<!-- Bootstrap js -->
		<script src="view/js/bootstrap/bootstrap.min.js"></script>
		<!-- All Plugins js -->
		<script src="view/js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="view/js/active.js"></script>