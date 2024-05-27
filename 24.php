<?php
   if(isset($_POST['submit']))
        echo " The reverse of the enter string is <b>".strrev($_POST['str'])."</b>";
    else{
        ?>
<form action="24.php" method="post">
    <div>
        Enter the String:
        <input type="text" name="str" />
        <input type="submit" name="submit" />
    </div>
</form>
<?php
    }
?>