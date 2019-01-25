<?php
   include("p1.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $CompanyName = mysqli_real_escape_string($db,$_POST['CompanyName']);
      $JobTitle = mysqli_real_escape_string($db,$_POST['JobTitle']); 
       $Qualification= mysqli_real_escape_string($db,$_POST['Qualification']); 
        $JobDiscription = mysqli_real_escape_string($db,$_POST['JobDiscription']); 
         $JobLocation = mysqli_real_escape_string($db,$_POST['JobLocation']); 
          $JobLink = mysqli_real_escape_string($db,$_POST['JobLink']); 
           $ApplicationDate = mysqli_real_escape_string($db,$_POST['ApplicationDate']); 





      
      $sql = "SELECT id FROM placement WHERE CompanyName = '$CompanyName' , JobTitle= '$JobTitle' ,Qualification='$Qualification', JobDiscription='$JobDiscription' , JobLocation='$JobLocation' , JobLink='$JobLink'and               ApplicationDate ='$ApplicationDate'";

      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
    
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
       
      }else {
         $error = "Your Login Name or Password is invalid";

          header("location: placement.html");
      }

   }
?>