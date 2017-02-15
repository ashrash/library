    <script type="text/javascript" src="/library/js/jquery-1.9.1.js">
</script>
<?php
    
    session_start();
 	if(!isset($_SESSION['email']))
	   	   	header('Location: /library/signin/');
    else
    {
		// header('Location: /library/Admin/.php');
        require'temp.html';
            
    }
?>     