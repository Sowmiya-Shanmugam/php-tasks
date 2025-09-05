<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>LOOPING STATEMENTS</h1>

    <h3>for loop</h3>
    <?php
for ($i = 1; $i <= 5; $i++) {
    echo "Number: $i <br>";
}
?>

<h3>for each loop</h3>
<?php
$colors = ["red", "green", "blue"];

foreach ($colors as $color) {
    echo "Color: $color <br>";
}
?>

<h3>while loop</h3>
<?php
$task = 1;
while ($task <= 5) {
    echo "🔄 Task $task in progress...<br>";
    $task++;
}
echo "✅ All tasks completed!";
?>

<h3>do-while loop</h3>
<?php
$task = 1;

do {
    if ($task == 3) {
        echo "❌ Task $task failed!<br>";
    } elseif ($task == 5) {
        echo "⚠️ Task $task needs review.<br>";
    } else {
        echo "✅ Task $task completed!<br>";
    }
    $task++;
} while ($task <= 5);
?>

</body>
</html>