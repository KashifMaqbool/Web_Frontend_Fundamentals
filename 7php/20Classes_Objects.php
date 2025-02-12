<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php Tutorial</title>
</head>
<body>
    <div class="container">
        My First  Php Website.
    </div>
    
<?php
class Fruit {
  public $name;
  public $color;
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color; 
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."; 
  }
}

class Strawberry extends Fruit {
  public function message() {
    echo "Am I a fruit or a berry? "; 
  }
}

$strawberry = new Strawberry("Strawberry", "red"); 
$strawberry->message(); // OK. message() is public
$strawberry->intro(); 
?>

</body>
</html>



