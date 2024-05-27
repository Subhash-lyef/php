<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
       <?php
             
                ?>
                    <form action="3.php" method="post">
                         <label for="fact"> Enter the number :-</label>
                         <input type="number" name="fact" id="fact">

                         <br>
                         <br>
                         <input type="submit" Value="Calculate Factorial" name="submit">
                    </form>
                
                <?php
             if(isset($_POST['submit']))
             {
                $n = $_POST['fact'];
                echo " The factorial of $n is ".factorial($n);
            }
            
       ?>


        <?php
               function factorial($n)
                 {
                     if($n == 0)
                        return 1;
                       return $n * factorial($n - 1);
                 }
        ?>
</body>
</html>