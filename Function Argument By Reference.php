<!DOCTYPE html>
<html>
<head>
 
  <title>Document</title>
</head>
<body>
  <?php
      function Name($ste)
      {
        $ste .= " and sumthing extra.";    
      }
      $string = "this is var ";
       Name($string);
       echo $string ."<br>";
       /////////////////////////////////////////////////////////////
      function Namee(&$stee)
      {
        $stee .= " and sumthing extra.";    
      }
      $stringe = "this is var & peramitr ";
       Namee($stringe);
       echo $stringe;
       /////////////////////////////////////////////////////////////

  ?>
</body>
</html>