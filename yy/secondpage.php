<?php
include("db.php");
include("random.php");
// $random=rand() . "<br>";
$f=$_POST['FirstName'];
$m=$_POST['MiddleName'];
$l=$_POST['LastName'];
$y=$_POST['YearofPassing'];
$b=$_POST['Branch'];
$gender=$_POST['Gender'];
$ps=$_POST['present'];
//$psindex=$_POST['fields'];
$en=$_POST['business'];
$com=$_POST['company'];
$occ=$_POST['Occupation'];
$dep=$_POST['Department'];
$pes=$_POST['pes'];
$uni=$_POST['university'];
$cn=$_POST['ContactNumber'];
$eid=$_POST['emailid'];
$u=$_POST['username'];
$p=$_POST['password'];
// $cp=$_POST['pwd'];
$nam=$_POST['Name'];
$mob=$_POST['mobile'];
$em=$_POST['EmailId'];

// 	echo"ps is ----------------------------".$ps;
// if($ps=='Entrepreneur')
// {

//echo "VALUES('.$ps.','.$cn.','.$eid.','$u','$p','$n','$m','$e')";

echo "you are in secondpage.php";
// echo "PresentStatus : ".$ps;
echo "your name is : ".$nam." your emailid is : ".$em." ";
if($conn->query("INSERT INTO register( Id,FirstName,MiddleName,LastName,YearofPassing,Branch,Gender)VALUES('$random','$f','$m','$l','$y','$b','$gender')"))
{
	echo"Data inserted from firstpage";
}
else
{
	echo "data not inserted in first page";
}	
$q = "INSERT INTO reg(
	Id,PresentStatus,ContactNumber,EmailId,Username,Password,Name,mobilenumber,Email)
	VALUES
	('$random','$ps','$cn','$eid','$u','$p','$nam','$mob','$em')";
	echo "insert query is : ".$q." ";
if($conn->query($q))

{

echo"Data inserted";

 header("location:home.html");	
}
else
{

echo"Data not Inserted";

}
// }


// elseif($ps=='Employee')
// {
// if($conn->query("INSERT INTO reg(PresentStatus,ContactNumber,EmailID,Username,Password,ConfirmPassword,Name,mobilenumber,email,TypeofBussiness,CompanyName,Designation,PresentEducationstatus,University)VALUES('$ps','$cn','$eid','$u','$p','$cp','$n','$m','$e','','$com','$deg','','')"))

// {

// echo"Data inserted";
// header("location:login.html");	
// }
// }
// elseif($ps=='Student')
// {
// if($conn->query("INSERT INTO reg(PresentStatus,ContactNumber,EmailID,Username,Password,ConfirmPassword,Name,mobilenumber,email,TypeofBussiness,CompanyName,Designation,PresentEducationstatus,University)VALUES('$ps','$cn','$eid','$u','$p','$cp','$n','$m','$e','','','','$pes','$uni')"))

// {

// echo"Data inserted";

// header("location:login.html");	
// }
// }
