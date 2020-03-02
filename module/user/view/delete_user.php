<div id="contenido">
    <form autocomplete="on" method="post" name="delete_user" id="delete_user" action="index.php?page=controller_user&op=delete&name=<?php echo $_GET['name']; ?>">
        <table border='0'>
            <tr>
                <td align="center"  colspan="2"><h3>¿Do you really want to delete <?php echo $_GET['name']; ?>?</h3></td>
            </tr>
            <tr>
                <td align="center"><button type="submit" class="Button_green"name="delete" id="delete">Confirm</button></td>
                <td align="center"><a class="Button_red" href="index.php?page=controller_user&op=list">Cancel</a></td>
            </tr>
        </table>
    </form>
</div>