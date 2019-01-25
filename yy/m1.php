
<?php

include 'm.php';


$email = $_POST["mid"];
$password = $_POST["profile"];
$city = $_POST["edct"];
$dateofbirth = $_POST["goal"];



if($mysqli->query("INSERT INTO  ment() VALUES('$email','$password','$city ','$dateofbirth')"))
    {
   
    echo 'Data inserted';
   
}else{
    echo 'Data not inserted';
}



?>