<!DOCTYPE html>
<html>
<head>
 
  <title>Document</title>
</head>
<body>
  <?php
      function FunctionName( $var="he" )
      {
        echo "hello $var.<br>";
        # code...
      }
      function FunctionName1( $var="mitia",$her="mirzapur" )
      {
        echo "hello $var $her.<br>";
        # code...
      }
      function FunctionName2( $var,$her )
      {
        echo $var + $her;
        # code...
      }
      FunctionName("gyanendra");
      FunctionName();
      FunctionName1("gyandendra","dubey");
      FunctionName1();
      $a=10;
      $b=60;

      FunctionName2($a,$b);
  ?>
</body>
</html>