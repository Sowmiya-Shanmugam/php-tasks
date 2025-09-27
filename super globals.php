<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <body>
      <h1>$_GET</h1>
    <form method="get" action="">
        name:<input type="text" name="name">
        age:<input type="text" name="age">
        <input type="submit">
    </form>
  
    <?php
    if (isset($_GET['name']) && isset($_GET['age'])) {
        echo "name: " . $_GET['name'] . "<br>";
        echo "age: " . $_GET['age'];
    }
    ?>

     <h1>$_POST</h1>
     <form method="post" action="">
        name:<input type="text" name="name">
        password:<input type="text" name="password">
        <input type="submit">
     </form>

        <?php
    if (isset($_POST['name'])) {
        echo "name: " . $_POST['name'] . "<br>";
        echo "age: " . $_POST['password'];
    }
    ?>

    <h1>$_REQUEST</h1>
    <form method="get" action="">
        name:<input type="text" name="name">
        <input type="submit">
    </form>

    <?php
    if (isset($_REQUEST['name'])) {
        echo "name: " . $_REQUEST['name'];
    }
    ?>

    <h1>$_COOKIE</h1>
    <h4>SET A COOKIE</h4>

    <?php
    setcookie("user","sowmi",time()+3600);
        echo "cookie is set";
    ?>

    <h4>ACCESS A COOKIE</h4>

    <?php
    if(isset($_COOKIE['user'])){
        echo "user is:".$_COOKIE['user'];
    }else{
         echo "cookie is not set";
    }
    ?>

    <h4>DELETE A COOKIE</h4>

     <?php
     setcookie("user","",time()-3600);
        echo "cookie is deleted";
    ?>
</body>
</html>

