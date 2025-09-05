<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>OPERATORS</h1>
    <h3>ARITHMETIC OPERATORS</h3>
    <?php 
    $a=10;
    $b=5;
    echo "addition :", $a+$b. "<br>";
    echo "subraction :",$a-$b. "<br>";
    echo "multiplication :",$a*$b. "<br>";
    echo "division :",$a/$b. "<br>";
    echo "modulus :",$a%$b. "<br>";
    echo "exponent :",$a**$b. "<br>";
    ?>

    <h3>ASSIGNMENT OPERATORS</h3>
     <?php 
    $x=10;
    echo $x."<br>";
    echo $x+=5,"<br>";
    echo $x-=5,"<br>";
    echo $x*=5,"<br>"; 
    echo $x/=5,"<br>";
    echo $x%=5,"<br>";
    echo $x**=2,"<br>";
    ?>

    <h3>COMPARISON OPERATORS</h3>
    <?php
    $a = 10;
    $b = "10";
    $c = 20;
    echo "== : " . ($a == $b) . "<br>";      // true (1)
    echo "=== : " . ($a === $b) . "<br>";    // false (empty)
    echo "!= : " . ($a != $c) . "<br>";      // true (1)
    echo "<> : " . ($a <> $c) . "<br>";      // true (1)
    echo "!== : " . ($a !== $b) . "<br>";    // true (1)
    echo "> : " . ($c > $a) . "<br>";        // true (1)
    echo "< : " . ($a < $c) . "<br>";        // true (1)
    echo ">= : " . ($a >= $b) . "<br>";      // true (1)
    echo "<= : " . ($a <= $c) . "<br>";      // true (1)
    echo "<=> (a vs c): " . ($a <=> $c) . "<br>";  // -1
    echo "<=> (a vs b): " . ($a <=> $b) . "<br>";  // 0
    echo "<=> (c vs a): " . ($c <=> $a) . "<br>";  // 1
?>

<h3>INCREMENT/DECREMENT OPERATORS</h3>
<?php
 $a = 10;
 $b = 15;
 echo "++a=".++$a."<br>";
  echo "b++ = " . $b++ . "<br>"; 
echo "Now b = " . $b . "<br>";  
 echo "--a=".--$a."<br>";
  echo "b--=".$b--."<br>";
  echo "Now b = " . $b . "<br>"; 
 ?>

 <h3>LOGICAL OPERATORS</h3>
 <?php
$a = true;
$b = false;

echo "a and b = " . ($a and $b) . "<br>";   // false → empty
echo "a && b = " . ($a && $b) . "<br>";    // false → empty

echo "a or b = " . ($a or $b) . "<br>";    // true → 1
echo "a || b = " . ($a || $b) . "<br>";    // true → 1

echo "!a = " . (!$a) . "<br>";             // false → empty
echo "!b = " . (!$b) . "<br>";             // true → 1

echo "a xor b = " . ($a xor $b) . "<br>";  // true → 1
?>

 <h3>STRING OPERATORS</h3>
 <?php
 $a="hello";
  $b="world";
  echo $a." ".$b."<br>";
  $c="php";
   $c.=" is awesome";
   echo $c;
  ?>
</body>
</html>