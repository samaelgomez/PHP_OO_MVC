<div id="contenido">
    <h1>Game details</h1>
    <p>
    <table border='2'>
        <tr>
            <td>Name: </td>
            <td>
                <?php
                    echo $name['name'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Pegi: </td>
            <td>
                <?php
                    echo $name['pegi'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Edition: </td>
            <td>
                <?php
                    echo $name['edition'];
                ?>
            </td>
        </tr>
        
        <tr>
            <td>Languages: </td>
            <td>
                <?php
                    echo $name['languages'];
                ?>
            </td>
        </tr>
    </table>
    </p>
    <p><a href="index.php?page=controller_user&op=list">Back</a></p>
</div>