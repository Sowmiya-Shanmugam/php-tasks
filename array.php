<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>array</h1>
    <?php
    $fruits=array("apple","banana","mango");
    echo $fruits[0]."<br>";
     echo $fruits[1]."<br>";
      echo $fruits[2]."<br>";
    ?>
  
   <h1>indexed array</h1>
    <?php
    $colors=array("red","green","blue");
    echo $colors[0]."<br>";
    print_r($colors);  // to print all elements in an array
    ?>

    <h1>associative array</h1>
    <?php
    $student=array("name"=>"john","age"=>20,"course"=>"php");
     echo $student["name"]."<br>";
     echo $student["age"]."<br>";
     echo $student["course"]."<br>";
    ?>

    <h1>multidimensional array</h1>
    <?php
    $students=array(
        array("john",20,"php"), 
        array("mary",21,"c++"),
     array("renu",22,"python"));
     echo $students[0][1]."<br>";
     echo $students[1][0]."<br>";
     echo $students[2][2];
      ?>

<h1> array functions</h1>
<?php
$colors=array("red","green","blue","orange");

echo count($colors) . "<br>";
echo array_push($colors,"yellow"). "<br>";
print_r($colors); echo "<br>";

echo array_pop($colors). "<br>";
print_r($colors); echo "<br>";

echo array_shift($colors). "<br>";
echo array_unshift($colors,"purple"). "<br>";
print_r($colors); echo "<br>";

echo (in_array("red",$colors) ? "Yes" : "No"). "<br>";
print_r($colors); echo "<br>";

print_r(array_keys($colors)); echo "<br>";

// 👉 Newly added functions
print_r(array_values($colors)); echo "<br>";

sort($colors);
print_r($colors); echo " (after sort)<br>";

rsort($colors);
print_r($colors); echo " (after rsort)<br>";

asort($colors);
print_r($colors); echo " (after asort)<br>";

ksort($colors);
print_r($colors); echo " (after ksort)<br>";
?>



  <h1> for loop through arrays </h1>
  <?php
   $colors=array("red","green","blue");
   for($i=0;$i<count($colors);$i++){
    echo $colors[$i]."<br>";
   }
?>

 <h1> foreach loop through arrays </h1>
 <?php
   $student=array("name"=>"john","age"=>21,"course"=>"PHP");
   foreach ($student as $key => $value) {
    echo $key. ":".$value ."<br>";
   }
?>
</body>
</html>