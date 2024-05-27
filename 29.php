<?php

  // function that retutn the factorial of given number 
    function fact($n )
     {
         if($n == 0)
            return 1;
        return $n *fact($n - 1);
     }

if(isset($_POST['submit']))
      {
        echo " The factorial of ".$_POST['fact'] ." is " .fact($_POST['fact']);
      }
    else{
        ?>
<form action="29.php" method="post">
    <div>
        Enter number:
        <input type="number" name="fact" />
        <input type="submit" name="submit" />
    </div>
</form>
<?php
    }

?>