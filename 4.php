<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
      
                    <form action="4.php" method="post">
                         <label for="num"> Enter the number :-</label>
                         <input type="number" name="num" id="num">

                         <br>
                         <br>
                         <input type="submit" Value="Generate fabonacci" name="submit">
                    </form>
                
                 <?php 
                      if(isset($_POST['submit']))
                      {
                        $n = $_POST['num'];
                        echo " <br> The fibonacci series are :- <hr>";
                        fibo_series($n);
                        echo " <hr>";
                      }

                 ?>

                 <?php
                     function fibo_series($n)
                     { 
                        $a = 0;
                        $b = 1;
                         echo " $a   $b";
                        for($i = 3 ; $i <= $n ; $i++)
                        {
                            $c = $a + $b;
                            echo " $c ";
                            $a = $b ;
                            $b = $c;
                        }
                     }
                 
                 ?>


       
</body>
</html>