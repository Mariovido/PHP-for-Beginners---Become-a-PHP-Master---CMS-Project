<!DOCTYPE html>
<html lang="en">

<?php

if (isset($_POST['submit'])) {

  $name = array("Edwin", "Student", "Peter", "Samid", "Mohad", "Jane", "tom");
  $minimun = 5;
  $maximun = 10;

  $username = $_POST['username'];
  $password = $_POST['password'];

  if (strlen($username) < $minimun) {
    echo "Username has to be longer than five";
  }
  if (strlen($username) > $minimun) {
    echo "Username cannot to be longer than 10";
  }
  if (!in_array($username, $name)) {
    echo "Sorry you are not allowed";
  } else {
    echo "Welcome";
  }

  // echo "Hello " . $username;
  // echo "Your Password is " . $password;
}

?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <form action="form.php" method="post">
    <input type="text" name="username" placeholder="Enter Username" />
    <input type="password" name="password" placeholder="Enter Password" />
    <br />
    <input type="submit" name="submit" />
  </form>

</body>

</html>