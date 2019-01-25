
<?php

include 'Dbconnect.php';


$fname = $_POST["fname"];
$email = $_POST["lname"];

$city = $_POST["email"];

$pwd = $_POST["pwd"];
$lname = $_POST["cpwd"];

$dbirth = $_POST["dob"];
$year = $_POST["pyear"];

if($mysqli->query("INSERT INTO reg (firstname,lastname,email, password,confirmpassword,dateofbirth,passingyear) VALUES('$fname','$email','$city','$pwd','$lname','$dbirth','$year')"))
    {
   
    echo 'Data inserted';
    //echo '<li><a href="http://localhost/PhpProject2/Alumini_Login.html">Login</a></li>';
}else{
    echo 'Data not inserted';
}



?>