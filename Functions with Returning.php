<!DOCTYPE html>
<html>
<head>
 
  <title>Document</title>
</head>
<body>
  <?php
  function FunctionName($a="fust ", $b="lest")
  {
    $v = $a ." _" .$b ."<br>";
    return $v;
    # code...
  }
  $x = FunctionName("gyanendra","dubey");
  $y = FunctionName();
  echo "hello worde  ".$x;
  echo "  ".$y;

//////////////////////////////////////////////////////////////////////////////

function student($hinde,$english,$math)
{
  $sum = $hinde + $english + $math;
  return $sum;
  # code...
}
function present($p)
{
  $ps = 3;
  $presentee = $p / $ps;
  // echo $present ."%";
  return $presentee ."%";
  # code...
}

$total = student(45,55,67);
 
   $vg=present($total);

    
  echo $vg;


      
  ?>
</body>
</html>