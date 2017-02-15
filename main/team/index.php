
<?php
    session_start();
if(!isset($_SESSION['email']))
	   	   	header('Location: /library/signin/');
    else
    {
      
     require'create_team.php';
        
    } 
?>   