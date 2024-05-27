<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> swap two  variable</title>
</head>
<body>
       <?php

          $x  = 10;
          $y  = 20;

          echo " <hr> Before swaping <br>";
          echo " the value of x is $x <br>";
          echo " The value of y is $y <br>";

          echo " <hr> After swapping <br> ";
             swap_without($x,$y);
          


       ?>

       <?php
            function swap_with($x , $y)
            {
                $temp = $x;
                $x = $y;
                $y = $temp;
                echo " the value of x is $x <br>";
                echo " The value of y is $y <br>";

            }

            function swap_without($x , $y)
            {
                $x = $x + $y;
                $y = $x - $y;
                $x = $x - $y;

                echo " the value of x is $x <br>";
                echo " The value of y is $y <br>";
            }   
       ?>
</body>
</html>