<?php
    
    session_start();
 	if(!isset($_SESSION['email']))
	   	   	header('Location: /library/signin/');
    else
    {
		 header('Location: /library/main/project.php');
            
    }
?>     