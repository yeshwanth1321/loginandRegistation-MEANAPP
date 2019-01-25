
<?php

include 'ad.php';


$email = $_POST["name"];
$password = $_POST["adays"];
$dateofbirth =$_POST["atime"];
$city = $_POST["sub"];


if($mysqli->query("INSERT INTO adj(name, adays,atime,sub) VALUES('$email','$password','$dateofbirth','$city')"))
    {
   
    echo 'Data inserted';
   
}else{
    echo 'Data not inserted';
}



?>