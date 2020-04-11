<div id="contenido">
    <form autocomplete="on" method="POST" name="alta_user" id="alta_user" onsubmit="return validate();" action="index.php?page=controller_user&op=create">
        <h1>New game</h1>
        <table border='0'>
                   
            <tr>
                <td>Name: </td>
                <td><input type="text" id="name" name="name" placeholder="Name" value=""/></td>
            </tr>
            
            <tr>
                <td>Pegi: </td>
                <td><input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="3"/>3
                    <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="7"/>7
                    <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="12"/>12
                    <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="16"/>16
                    <input type="radio" id="pegi" name="pegi" placeholder="Pegi" value="18"/>18</td>
            </tr>
            
            <tr>
                <td>Edition: </td>
                <td><select id="edition" name="edition" placeholder="Edition">
                    <option value="Standard">Standard</option>
                    <option value="Deluxe">Deluxe</option>
                    <option value="Collectionist">Collectionist</option>
                    </select></td>
            </tr>
            
            <tr>
                <td>Languages: </td>
                <td><input type="checkbox" id= "languages[]" name="languages[]" placeholder= "languages" value="English"/>English
                    <input type="checkbox" id= "languages[]" name="languages[]" placeholder= "languages" value="Italian"/>Italian
                    <input type="checkbox" id= "languages[]" name="languages[]" placeholder= "languages" value="Spanish"/>Spanish</td>
            </tr>
            
            <tr>
                <td><input type="submit" name="create" id="create"/></td>
                <td align="right"><a href="index.php?page=controller_user&op=list">Back</a></td>
            </tr>
        </table>
    </form>
</div>