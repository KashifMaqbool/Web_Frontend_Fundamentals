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
// Try, catch, finally and throw keywords for exception handling.
function divide($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

try {
  echo divide(5, 0);
} catch(Exception $e) {
  echo "Unable to divide. ";
} finally {
  echo " <br>Process complete.";
}
?>

</body>
</html>



