<?php

    session_start();    
       require'/home/a4613629/public_html/library/config.php';
    $myroll=$_SESSION['email'];
    $roll=$_POST['roll_no'];
    $id=md5($roll);
    $query="Update account set team_id='$id' where email='$myroll'";
    $res=mysqli_query($connect,$query);
    $query="Update request set status='1' where fuser_id='$roll' and tuser_id='$myroll' ";
    $res=mysqli_query($connect,$query);
    //require('\xampp\htdocs\library\main\template.html');
    echo "<h2>Successful</h2>";

?>
