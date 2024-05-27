<?php
   function prime($n)
   {
       for($i = 2 ; $i < ($n / 2) ; $i++)
             if( $n % $i ==0)
                    return false;
                return true;
   }

   $n = 13;
    echo " $n is prime ".prime($n);
?>