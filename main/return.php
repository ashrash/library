<?php

session_start();
//require'temp.html';
$bookid=$_GET['r'];
$userid=$_SESSION['id'];
require'config.php';  
 
$query="Update books set status=1 where id='$bookid'";
    $result= mysqli_query($conn,$query);
 
    date_default_timezone_set('Asia/Kolkata');//date stamp
    $dat= date("F j, Y, g:i a");//date	
     
     
 $query="Update withdraw set r_date='$dat' where book_id='$bookid'";
echo $query;
    $result= mysqli_query($conn,$query);
 

?>