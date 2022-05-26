<?php

$connection = mysqli_connect("localhost", "root", "1234", "loginapp");

if (!$connection) {
  die("Database connection failed");
}
