<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IAWD_2201</title>
</head>
<body>
    <?php

/* Number swap  */
      $var_a = 55;  
      $var_b = 35;  
      echo 'Variables value before swap <br> <br>';
      echo 'variable a = '.$var_a.' variable b =  '.$var_b ;
          $var_swap_1 = $var_b;
          $var_swap_2 = $var_a;
      echo "Variables value after swap <br> <br>";  
      echo "Variable_1 = ".$var_swap_1."  Variable_2 = ".$var_swap_2;  
      echo "<br> <br>";

/* Even / Odd checker function */
      echo "Detarmine Even or Odd number through PHP";
      echo "<br> <br>";
      function Numbercheck(){
            $var_num = 19;    
            if($var_num % 2 == 0){
                echo "The Number is Even"; 
            }
            else{
                echo "The Number is Odd";
            }
      }
      Numbercheck();
/* Switch Case */ 
      echo "<br> <br>";
      function SwitchCase(){
            $X_number = 70;
           switch ($X_number) {
            case  50;
            echo "The number is 50";
            break;
            case  60;
            echo "The number is 60";
            break;
            case  70;
            echo "The number is 70";
            break;
            default;
            echo "The number nnull";
            break;
           }
      }
      SwitchCase();

    ?>
</body>
</html>