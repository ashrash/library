<?php
    //require 'template.html'; 
 require'config.php';
$passkey=$_GET['passkey']; 
	// Retrieve data from table where row that match this passkey 
    $q="INSERT INTO account select email,name,email,pass,cgpa,year,phno,team_id,date from temp_user where ccode='$passkey'";
	$result1=mysqli_query($connect,$q); 
	if($result1)
	{ 
		          echo "<h1>Your account has been activated</h1>";
		          // Delete information of this user from table "temp_members_db" that has this passkey 
		          $sql3="DELETE FROM temp_user WHERE ccode = '$passkey'";
		          $result3=mysqli_query($connect,$sql3);
    }
	else 
	{
		echo "Wrong Confirmation code"; 
	}
// if successfully moved data from table"temp_members_db" to table "registered_members" displays message "Your account has been activated" and don't forget to delete confirmation code from table "temp_members_db"
	
?>