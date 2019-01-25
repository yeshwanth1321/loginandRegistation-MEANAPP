
<?php

include 'd2.php';


$email = $_POST["username"];
$password = $_POST["password"];



if($mysqli->query("INSERT INTO login (username, password) VALUES('$email','$password')"))
    {
   
    echo 'Data inserted';
   
}
else
 
 {
    echo 'Data not inserted';
}



?>