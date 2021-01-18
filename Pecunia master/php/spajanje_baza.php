<?php

$sname= "localhost";
$unmae= "root";
$password = "fesb1234";

$db_name = "pecunia_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}