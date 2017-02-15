<?php

session_start();
require'temp.html';
$bookid=$_GET['q'];
$userid=$_SESSION['id'];
require'config.php';  

$query="SELECT status FROM books where id='$bookid'";
			$result= mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
if($row[0]==0)
{
    echo '<h3>book not available</h3>';
}
else
{
    date_default_timezone_set('Asia/Kolkata');//date stamp
    $dat= date("F j, Y, g:i a");//date	
    $query="Insert into withdraw(user_id,book_id,w_date,r_date) values('$userid','$bookid','$dat',' ') ";
    $result= mysqli_query($conn,$query);
     
    $query="Update books set status=0 where id='$bookid'";
    $result= mysqli_query($conn,$query);
     echo '<h3>Book withdrawn</h3>';
}


?>