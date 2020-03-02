<div id="contenido">
    <div class="container">
    	<div class="row">
    			<h3>Game list</h3>
    	</div>
    	<div class="row">
    		
    		<table id="table_crud">
                <thead>
                    <tr>
                        <td width=125><b>Name</b></th>
                        <td width=125><b>Pegi</b></th>
                        <td width=125><b>Edition</b></th>
                        <th width=350><b>Action</b></th>
                    </tr>
                </thead>
                <tbody>
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
                                echo '<td width=125>';
                                print ("<div class='Button_blue' id='".$row['name']."'>Read</div>");
                                echo '</td>';
                                echo '</tr>';
                            }
                        }
                    ?>
                </tbody>

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

<!-- Active js -->
<script src="view/js/active.js"></script>