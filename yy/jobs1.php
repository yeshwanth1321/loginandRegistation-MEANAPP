<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> ALumni</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="index.css" type="text/css" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	</head>
<body>

<?php
include("db.php");
$sql = "SELECT * FROM Jobs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> CompanyName: ".$row["COMPANYNAME"]."- JobTitle:".$row["JOB_TITLE"]." -Job_description:" .$row["JOB_DESCRIPTION"]."-QUALIFICATION:".$row["QUALIFICATION"]."-DEADLINE:".$row["DEADLINE"]."-LINK:"<a href=".$row["JOB_LINK"]./>"<br>";
    }
} else {
    echo "0 results";
}

$conn->close();
?> 

</body>
</html>