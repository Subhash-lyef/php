<?php
echo " <hr> examaple for continue statement <br>";
for($i = 1; $i <=10;$i++)
   {
      if($i == 5 || $i == 6)
          continue;          // as continue statement executed 
                             //the loop will transfer for the next iteration 
      echo  " <hr> The iteration number is $i";
   }
echo " <hr> The examample of break statement < br>";
   for($i = 0; $i <= 10; $i++)
    {
        if ($i == 5)
           break;
        echo " <hr> the otreation numbver is $i";
    }

?>