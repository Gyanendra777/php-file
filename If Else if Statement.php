<!DOCTYPE html>
<html>
<head>
 
  <title>Document</title>
</head>
<body>
  <?php
      $number = 66;
      if ($number >= 80 && $number <= 100) {
        echo "your are in merit";
      } elseif($number >= 70 && $number <= 80){
         echo "your are in  1 division";
      
      } elseif($number >= 60 && $number <= 70){
         echo "your are in  2 division";
      
      } elseif($number >= 50 && $number <= 60){
         echo "your are in  3 division";
      
      } elseif($number >= 40 && $number <= 50){
         echo "your are in  4 division";
      }
      
  ?>
</body>
</html>