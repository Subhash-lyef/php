<?php
  $marks = 49;

  switch($marks)
  {
    case $marks > 75 ;
         echo " Distinciton ";
         break;
    case $marks  > 60 :
          echo " Fisrst Divivsion";
           break;
    case $marks  > 45 :
        echo  " Second Division ";
          break;
    case $marks > 33 :
        echo " Third Divivsion ";
          break;
    default :
       echo " Fail ";
  }

?>