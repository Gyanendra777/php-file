<!DOCTYPE html>
<html>
<head>
 
  <title>Document</title>
</head>
<body>
  <?php
      for ($a=0; $a < 10; $a++) { 
       
       echo "nume : ".$a."<br>";
      }
      /////////////////////////////////////////////////////////////////////////////
      echo "<br><br><br><br>";
      for ($a=0; $a < 10; $a++) { 
        if ($a == 3) {
          # code...
          echo "neme2 : ".$a;
          // continue;
        }
       echo "nume2 : ".$a."<br>";
      }
      echo "<br><br><br><br>";
      /////////////////////////////////////////////////////////////////////////////
      for ($a=0; $a < 10; $a++) { 
        if ($a == 3) {
          # code...
          echo "neme3 : ".$a;
          // continue;
          break;
        }
       echo "nume3 : ".$a."<br>";
      }
  ?>
</body>
</html>