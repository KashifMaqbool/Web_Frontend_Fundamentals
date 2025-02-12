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
print " While Loop <br> ";
$x = 1;
while($x <= 5) {
  echo "The number is: $x <br>";
  $x++;
}
?>

<?php
print " Do While Loop <br> ";
$x = 1;
do{
  echo "The number is: $x <br>";
  $x++;
}while($x <= 5)
?>

<?php
print " For Loop <br> ";
for( $i = 1; $i<=5; $i++){
    echo " This is number $i <br>";
}
?>

<?php
print " For each Loop";
$num = array(1,2,3,4,5,6,7,8,9,10);

foreach ($num as $value) {
  echo "$value <br>";
}
?>
</body>
</html>


