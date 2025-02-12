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
    echo "These are Variables.";
    $x = 5;
    $y = "Apples";
    echo " <br> These are $x  $y ";
    ?>

<?php
// local, global scope and global keyword
$x = 5;
$y = 10;
function myTest() {
  global $x, $y;
  $y = $x * $y;
} 
myTest(); 
echo "<br> The Value of y due to global keyword is  =  $y";
print "<br> The Value of x due to global keyword is  =  $x";

    ?>
</body>
</html>