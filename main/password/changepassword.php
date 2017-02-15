<?php
 require'/home/a4613629/public_html/library/config.php'; 
    $cpass=$_POST['cpass_word'];
    $pass=$_POST['pass_word'];
    session_start();
    $roll=$_SESSION['email'];
    $query="Select * from account where pass='$pass' and roll='$roll'";
    $res=mysqli_query($connect,$query);
?>  