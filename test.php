
<?php
  
$x=7;
$y=3;
$operator = '8'; 
switch ($operator) {
   case '+':
   echo $x + $y;
      break;
   case '-':
      echo $x - $y; 
      break;   
   case '*':
      echo $x * $y; 
      break; 
   case '/':
      echo $x / $y; 
      break;           
   default:
      echo '<span style="color:red">invalied';
      break;
}




?>
