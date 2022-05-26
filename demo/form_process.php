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