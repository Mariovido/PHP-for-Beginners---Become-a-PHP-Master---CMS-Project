<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <?php

  function greeting($message)
  {
    echo $message;
  }

  // greeting("Hi Customer how are you?");

  ?>

  <?php

  function addNumbers($number1, $number2)
  {
    $sum = $number1 + $number2;
    echo $sum;
  }

  addNumbers(345, 3462);

  ?>
</body>

</html>