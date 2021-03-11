<!DOCTYPE html>
<html>
<head>
 
  <title>Document</title>
</head>
<body>
  <?php
  $weekday =2;
  switch ($weekday) {
    case '1':
      echo "today is monday";
      break;
    case '2':
      echo "today is wednesday";
      break;
    case '3':
      echo "today is thurday";
      break;
    case '4':
      echo "today is friday";
      break;
    case '5':
      echo "today is saturday";
      break;
    case '6':
      echo "today is sunday";
      break;
    case '7':
      echo "today is monday";
      break;
      
      default:
      echo "today is";
      
      break;
  }
      
  ?>
</body>
</html>