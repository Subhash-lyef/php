<!-- php script to create a form that take name as text age as text and has submit button
 -->
<?php
  if(isset($_POST['submit']))
       echo " Submitted Successfully........";
    else
    {
       ?>
<form action="21.php" method=post>
    <div>
        Enter your name:
        <input type="text">
    </div>
    <br>
    <div>
        Enter your age:
        <input type="text">
    </div>
    <br>
    <div>
        <input type="submit" value="submit" name="submit">
    </div>
</form>
<?php
    }
 ?>