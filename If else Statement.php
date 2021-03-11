<!DOCTYPE html>
<html>
<head>
 
  <title>Document</title>
</head>
<body>
  <?php
  $a = 100;
  if ($a == 100) {
    echo "x is same <br>";
  } else {
    echo "x is not same <br>";
  }
  ///////////////////////////////////////////
  if ($a == "100") {
    echo "x is same <br>";
  } else {
    echo "x is not same <br>";
  }
  ////////////////////////////////////////////
  if ($a === "100") {
    echo "x is same <br>";
  } else {
    echo "x is not same <br>";
  }
  //////////////////////////////////////////////
  $neme = "raju";
  $nemee = "same";
  if ($nemee == "same") {
    echo 'hello mr :'.$neme;
  } else {
    echo "hello miss :".$neme;
  }
  

      
  ?>
</body>
</html>