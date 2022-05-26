<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


    <?php

    /*  Step1: Define a function and make it return a calculation of 2 numbers

	Step 2: Make a function that passes parameters and call it using parameter values


 */

    function calculation()
    {
      $number1 = 20;
      $number2 = 50;

      $sum = $number1 + $number2;

      return $sum;
    }

    $theSum = calculation();

    echo $theSum . "<br/>";

    function Hola($hello)
    {
      echo $hello;
    }

    hola("Hey is that spanish?");

    ?>





  </article>
  <!--MAIN CONTENT-->


  <?php include "includes/footer.php" ?>