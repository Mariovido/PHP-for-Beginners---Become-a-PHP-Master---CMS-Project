<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

  <aside class="col-xs-4">
    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">


    <?php


    /*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

    echo rand(1, 1000) . "<br/>";

    $string = "afnoasnfosandfasaf";

    $valuLength = strlen($string);

    echo $valuLength . "<br/>";

    $values = ["fasfdnasof", 345342, "fasdfas", 23423, $string];

    $found = in_array($string, $values);

    if ($found) {
      echo "Wow we did together";
    } else {
      echo "We messed up, we could not find";
    }


    ?>





  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php" ?>