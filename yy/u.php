
<?php

include 'db1.php';


$fname = $_POST["fname"];
$email = $_POST["lname"];

$city = $_POST["email"];

$pwd = $_POST["pwd"];
$lname = $_POST["cpwd"];

$dbirth = $_POST["dob"];
$year = $_POST["pyear"];

if($mysqli->query("INSERT INTO reg () VALUES('$fname','$email','$city','$pwd','$lname','$dbirth','$year')"))
    {
   
    echo 'Data inserted';
   
}else{
    echo 'Data not inserted';

  
      }
        header("location: index.html");




?>