<?php
// funciton take three number and return the largest one 
 function largest($a,$b,$c)
 {
    if($a === $b && $a == $c)
       echo " all the number are equal";
    if( $a > $b && $a > $c)
         return $a;
   else if($b > $c)
        return $b;
    else
    return $c;
 }
 
 $n1 = 10;
 $n2 = 15;
 $n3 = 20;
 $large = largest($n1,$n2,$n3);
 echo " The largest number among $n1,$n2 and $n2 is $large";
 ?>