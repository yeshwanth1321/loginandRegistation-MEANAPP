<?php
// define variables and set to empty values

$CompanyNameErr = $QualificationErr = $JobTitleErr = $JobLinkErr = $JobLocationErr = $ApplicationDeadlineErr = "";
$CompanyName = $Qualification = $JobTitle = $JobLink = $JobLocation = $ApplicationDeadline = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["CompanyName"])) {
   $CompanyNameErr= "CompanyName is required";
  } else {
    $CompanyName = test_input($_POST["CompanyName"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $CompanyNameErr= "Only letters and white space allowed"; 
    }
  }
  
  if (empty($_POST["Qualification"])) {
    $QualificationErr = "Qualification is required";
  } else {
    $Qualification = test_input($_POST["Qualification"]);
   // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $QualificationErr = "Only letters and white space allowed"; 
    }
  }
    
  if (empty($_POST["JobTitle"])) {
    $JobTitleErr = " JobTitle is required";
  } else {
    $JobTitle = test_input($_POST["JobTitle"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $JobTitleErr = "Only letters and white space allowed"; 
    }
    }


  if (empty($_POST["JobLink"])) {
    $JobLink = "Joblink is required";
  } else {
    $JobLink = test_input($_POST["JobLink"]);
      // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$JobLink)) {
      $JobLinkErr = "Invalid URL"; 
    }
    }




  if (empty($_POST["JobLocation"])) {
    $JobLocationErr = "JobLocation is required";
  } else {
    $JobLocation = test_input($_POST["JobLocation"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $JobLocationErr = "Only letters and white space allowed"; 
    }
    }




  if (empty($_POST["ApplicationDeadline"])) {
    $ApplicationDeadlineErr = "ApplicationDeadline is required";
  } else {
    $ApplicationDeadline = test_input($_POST["ApplicationDeadline"]);
   // check if name only contains numbers and whitespace
    if (preg_match($date_regex, $test_date,$_POST['birthday']) ==true) {
      $ApplicationDeadlineErr = "user name must have no spaces"; 
    }
  }

 

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $CompanyName;
echo "<br>";
echo $Qualification;
echo "<br>";
echo $JobTitle;
echo "<br>";
echo $JobLink;
echo "<br>";
echo $JobLocation;
echo "<br>";
echo $ApplicationDeadline;

?>

