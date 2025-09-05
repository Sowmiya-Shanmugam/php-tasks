<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <h1>CONDITIONAL STATEMENTS....!</h1>

   <h1>If Statement</h1>
<?php
$year = 2024; 
if ($year % 4 == 0) {
    echo "$year is Leap Year ✅";
} else {
    echo "$year is  Not a Leap Year ❌";
}
?>

 <h1>if else Statement</h1>
 <?php
$age = 18; 
if ($age >= 18) {
    echo "eligible to vote ✅";
} else {
    echo "not eligible to vote ❌";
} 
?>

 <h1>nested if  Statement</h1>
 <?php
$age = 20;
$mood = "happy";
if ($age >= 18) {

    if ($mood == "happy") {
        echo "😊 Adult and happy!";
    } else {
        echo "🙂 Adult but not happy.";
    }
} else {
    echo "👶 Underage.";
}
?>

 <h1>elseif Statement</h1>
  <?php
$marks = 75;

if ($marks >= 90) {
    echo "Grade: A";
} elseif ($marks >= 75) {
    echo "Grade: B";
} else {
    echo "Grade: F";
}
?>

 <h1>elseif  ladder Statement</h1>
<?php
$weather = "Sunny";
if ($weather == "Sunny") {
    echo "☀️ It's a bright day!";
} elseif ($weather == "Cloudy") {
    echo "☁️ Overcast skies ahead.";
} elseif ($weather == "Rainy") {
    echo "🌧️ Don't forget your umbrella!";
} elseif ($weather == "Stormy") {
    echo "⛈️ Stay indoors, it's wild out!";
} else {
    echo "❓ Unknown weather condition.";
}
?>
 
 <h1>switch Statement</h1>
 <?php
$day = "Tuesday";

switch ($day) {
    case "Monday":
        echo "$day Start of the week!";
        break;
    case "Friday":
        echo "$day Almost weekend!";
        break;
    case "Sunday":
        echo "$day Relax, it's Sunday!";
        break;
    default:
        echo "$day Just another day.";
}
?>

 <h1>nested switch Statement</h1>
 <?php
$category = "fruit";
$item = "apple";

switch ($category) {
    case "fruit":
        switch ($item) {
            case "apple":
                echo "🍎 You chose an apple!";
                break;
            case "banana":
                echo "🍌 You chose a banana!";
                break;
            default:
                echo "❓ Unknown fruit.";
        }
        break;

    case "vegetable":
        switch ($item) {
            case "carrot":
                echo "🥕 You chose a carrot!";
                break;
            case "potato":
                echo "🥔 You chose a potato!";
                break;
            default:
                echo "❓ Unknown vegetable.";
        }
        break;

    default:
        echo "🚫 Unknown category.";
}
?>

</body>
</html>