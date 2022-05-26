<?php include "functions.php" ?>

<?php

session_start();
$_SESSION['message'] = "Hi student how are you?";

$expiration = time() + (60 * 60 * 24 * 7);
setcookie("TheName", "This is the Value", $expiration);

?>

<?php include "includes/header.php" ?>



<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">



    <?php

    /*  Create a link saying Click Here, and set 
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/

    if (isset($_GET['source'])) {
      echo $_GET['source'] . "<br/>";
    }

    ?>

    <a href="9.php?source=30134">CLICK HERE</a>
    <br />

    <?php

    if (isset($_COOKIE['TheName'])) {
      echo $_COOKIE['TheName'] . "<br/>";
    }

    if (isset($_SESSION['message'])) {
      echo $_SESSION['message'];
    }

    ?>


  </article>
  <!--MAIN CONTENT-->
  <?php include "includes/footer.php" ?>