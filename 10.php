<?php

 $n = 24517;
 $temp = $n;
 $m = 0;
 while($n > 0)
 {
    $m = 10*$m + $n%10;
    $n = floor($n/10); 
 }
 echo  " The reverse of $temp is $m";


?>