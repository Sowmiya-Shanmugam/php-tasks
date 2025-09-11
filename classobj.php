<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>creating class</h1>
    <?php
    class Car{
        public $brand;
        public $color;
        public function startEngine(){
            return "The engine has started!";
        }
    }
    ?>

    <h1>creating object </h1>
    <?php
   $myCar=new Car();
   $myCar->brand="BMW";
   $myCar->color="red";
   echo $myCar->brand ."<br>";
   echo $myCar->startEngine();
    ?>

 <h1>constructor</h1>
 <h3>ex1</h3>
  <?php
    class Car10{
        public $brand;
        public $color;
     public function __construct($brand,$color){
       $this->brand=$brand;
       $this->color=$color;
     }
  
    public function getDetails(){
        return "brand: {$this->brand}, color: {$this->color}";

    }
   }
  $car1=new Car10("audi","black");
  $car2=new Car10("bmw","red");
   echo $car1->getDetails();
    echo "<br>";
     echo $car2->getDetails(); 
    ?>

 <h3>ex2</h3>
<?php
class Cake{
    public $name;
    public $price;
public function __construct ($na,$prc){
    $this->name=$na;
     $this->price=$prc;
}
public function cakeDetail(){
    echo "name:$this->name,price:$this->price <br/>";
}
}
$obj=new Cake("black forest",1000);
$obj1=new Cake("black current",900);
$obj->cakeDetail();
$obj1->cakeDetail();
?>

<h3>ex3</h3>
<?php
class Cakeflav{
    public $name;
    public $price;
public function __construct ($na,$prc){
    $this->name=$na;
     $this->price=$prc;
}
public function cakeDetail(){
    echo "name:$this->name,price:$this->price <br/>";
}
}
class Flavour extends Cakeflav{
    public $flavour;
    public function __construct ($fla,$name,$price){
        parent::__construct($name,$price);
        $this->flavour=$fla;
}
public function fullDetail(){
     echo "name:$this->name,price:$this->price,Flavour:$this->flavour";
}
}
$o=new Flavour("chocolate","black forest",1000);
$o->fullDetail();
?>

</body>
</html>