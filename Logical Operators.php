<!DOCTYPE html>
<html>
<head>
 
  <title>Document</title>
</head>
<body>
  <?php
      $a = 25;
      if ($a >= 18 && $a <= 21) {
        echo "you are eligible11111.<br>";
      }
      if ($a >= 18 || $a <= 21) {
        echo "you are eligible22222.<br>";
      }
      if (!($a <= 18)) {
        echo "you are eligible!!!!!!!!!!!!!!.<br>";
      }
      echo "out side"
  ?>
</body>
</html>