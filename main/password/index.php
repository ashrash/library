<?php
    
    session_start();
 	if(!isset($_SESSION['email']))
	   	   	header('Location: /library/signin/');
    else
    {
            require('../template.html');
			require('changepassword.html');
			//require('template.html');
    }
?>