<?php

   if(isset($_POST['submit']))
        echo " Your deparment is ".$_POST['dept'];
    else{
        ?>
<form action="22.php" method="post">
    <div>
        <label for="department">Selecg your Department:</label>
        <select name="dept" id="department">
            <option value="Computer Science">Computer Sciene</option>
            <option value="Physcis">Physcis</option>
            <option value="chemistry">Chemistry</option>
            <option value="math">Mathmatics</option>
        </select>
        <br>
        <div><input type="submit" value="Submit" name="submit" /></div>
    </div>
</form>
<?php
    }
?>