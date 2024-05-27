<?php

  $n = 1 + rand()%5;
  switch($n)
  {
    case 1:
    ?><img src="image1.avif" alt="">
<?php
           break;
    case 2:
    ?><img src="image2.avif" alt="">
<?php
           break;
    case 3:
    ?><img src="image3.avif" alt="">

<?php
    break;
    case 4:
    ?><img src="image4.avif" alt="">
<?php
     break;
    case 5:
    ?><img src="image5.avif" alt="">
<?php
    break;
    default :
     echo " Somethind went wrong";
  }

?>