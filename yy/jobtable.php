<?php
include('session.php');
if($_SESSION['login_user'] == "")
{
header("Location: home_demo.html");
}
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title> ALumni</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">  -->
<style>
.mySlides {display:none;}
@keyframes slide {
  from { bottom: 100%;}
  to { top: -100%;}
}
@-webkit-keyframes slide {
  from { bottom: 100%;}
  to { top: -100%;}
}

table
{
  width:1200px;
}
th
{
  color: white;
}
table,th
{
  background-color: #0B2F6B;
  border:2px solid lightblue;
  align-content:center;
  padding: 19px;
}
table,tr,td
{
  padding:20px;
  background: gainsboro;
}
#text {
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:120px;
  font-size:30px;
  animation-name: slide;
  animation-duration: 20s;
  animation-timing-function: linear;
  animation-iteration-count: infinite;
  -webkit-animation-name: slide;
  -webkit-animation-duration: 20s;
  -webkit-animation-timing-function:linear;
  -webkit-animation-iteration-count: infinite;
}
</style>
<link rel="stylesheet" href="index1.css" type="text/css" />
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--
afflatus, a free CSS web template by ZyPOP (zypopwebtemplates.com/)

Download: http://zypopwebtemplates.com/

License: Creative Commons Attribution
//-->
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
</head>

<body>

		<div id="sitename">
			<div class="width">
				<h1><a href="#"> &nbsp&nbspM H V R </a></h1>

				<nav>
					<ul>
        					<li><a href="index1.php">Home</a></li>
        	    			<li><div class="dropdown">
                <button class="dropbtn">Placements</button>
                <div class="dropdown-content">
                  <a href="postjob1.php">Post about a job</a>
                  <a href="http://localhost:87/ws/jobtable.php">jobs</a>
                  <!-- <a href="#">Link 9</a> -->
                </div>
                </div></li>
         	   				<li><div class="dropdown">
                <button class="dropbtn">Events</button>
                <div class="dropdown-content">
                  <a href="eventspost1.php">Post an Event</a>
                  <a href="http://localhost:87/ws/eventtable.php">Events</a>
                  <!-- <a href="#">Link 9</a> -->
                </div>
                </div></li>
          	  				<li><a href="funds1.php">Funds</a></li>
          	  				<li><div class="dropdown">
                <button class="dropbtn">Adjunt Faculty</button>
                <div class="dropdown-content">
                  <a href="adjunctfaculty1.php">Registration</a>
                  <a href="http://localhost:87/ws/adjunctnotadmin.php">Class Details</a>
                  <!-- <a href="#">Link 9</a> -->
                </div>
                </div></li>
          	 				<!-- <li><a href="#">Contact us</a></li> -->
          	 				<li><a href="logout.php">LogOut</a></li>
        				</ul>
				</nav>
	
				<div class="clear"></div>
			</div>
		</div>
		<header>
			<div class="width">
				<h2 style="align-self:center">ALUMNI ENGAGEMENT SYSTEM</h2>
			</div>
		</header>
		<section id="body" class="width clear">
			<aside id="sidebar" class="column-left">
				<ul>
                	<li>
						<h4>Navigate</h4>
                        <ul class="blocklist">
                            <li><a href="index1.php">Home</a></li>
                            <li class="selected-item"><a href="http://localhost:87/ws/jobtable.php">Placements</a></li>
                            <li><a href="http://localhost:87/ws/eventtable.php">Events</a></li>
                            <li><a href="funds1.php">Funds</a></li>
                            <li><a href="http://localhost:87/ws/adjunctnotadmin.php">Adjunct Faculty</a></li>
                        </ul>

					</li>	
					<li>
						<h4>Events</h4>
						<ul>
							<li><a href="http://www.zypopwebtemplates.com" title="ZyPOP">ZyPOP</a></li>
							<li><a href="http://www.justfreetemplates.com" title="free web templates">Free web templates</a></li>
							<li><a href="http://www.awesomestyles.com/mybb-themes" title="mybb themes">MyBB themes</a></li>
							<li><a href="http://www.awesomestyles.com" title="free phpbb3 themes">phpBB3 styles</a></li>
		
						</ul>
					</li>
					
			</aside>
			<section id="content" class="column-right">
                		
	    <article>
    	
<section >
<table align="center">
<t>
<th>COMPANYNAME</th>
<th>JOB TITLE</th>
<th>JOB DESCRIPTION</th>
<th>QUALIFICATION</th>
<th>DEAD LINE</th>
<th>JOB LINK</th>
</t>
<?php
include("db.php");
$query="SELECT *FROM jobs";
$result=mysqli_query($conn, $query);
while($rows = $result->fetch_assoc())
{
	?>
	<tr>
	<td><?php echo $rows["COMPANYNAME"] ?></td>
	<td><?php echo $rows["JOB_TITLE"] ?></td>
	<td><?php echo $rows["JOB_DESCRIPTION"] ?></td>
	<td><?php echo $rows["QUALIFICATION"] ?></td>
	<td><?php echo $rows["DEADLINE"] ?></td>
	<td><a href="<?php echo $rows["JOB_LINK"] ?>"><?php echo $rows["JOB_LINK"];?></a></td>
</tr>
<?php
}
?>
</table>
</section>
</body>
</html>