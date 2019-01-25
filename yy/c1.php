
<?php

include 'd2.php';


$email = $_POST["email"];
$password = $_POST["pwd"];



if($mysqli->query("INSERT INTO login (email, password) VALUES('$email','$password')"))
    {
   
    echo 'Data inserted';
   
}else{
    echo 'Data not inserted';
}



?>