<?php include "functions.php" ?>
<?php

$connection = mysqli_connect("localhost", "root", "1234", "loginapp");

if (!$connection) {
  die("Database Connection Failed");
}

$query = "SELECT * FROM users";

$result = mysqli_query($connection, $query);

if (!$result) {
  die("QUERY FAILED");
}

?>
<?php include "includes/header.php" ?>


<section class="content">

  <aside class="col-xs-4">

    <?php Navigation(); ?>


  </aside>
  <!--SIDEBAR-->


  <article class="main-content col-xs-8">



    <?php

    /*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/

    while ($record = mysqli_fetch_assoc($result)) {
      echo $record['username'] . "<br/>";
    }

    ?>





  </article>
  <!--MAIN CONTENT-->

  <?php include "includes/footer.php" ?>