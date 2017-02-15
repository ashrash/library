<?php
    require('config.php');
    require('template.html');
    $salt='J2?H23!';
	
	  
	date_default_timezone_set('Asia/Kolkata');//date stamp
    $dat= date("F j, Y, g:i a");//date	
	$email=$_POST['email_id'];// EMail id 
	$name=$_POST['first_name']." ".$_POST['last_name'] ;//First name
   
	$phno=$_POST['phno'];
	$pass=md5($_POST['pass_word'].$salt);// encrypted password
     
	$ccode=md5(uniqid(rand())); // confirmation code
	//Inserting values into table "temp_user"
    //$qu=mysqli_query($connect,"use rash");
    
    $query="INSERT INTO Accounts(name,email,pass,phno,type,date) VALUES ( '$name','$email','$pass','$phno',1,'$dat')";
 
	$q=mysqli_query($connect,$query);
	//EMAIL !!
	if($q)//Checking for MySQL Query error
	{
		?>
<div class="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Signup successful </h4>
      </div>
      <div class="modal-body">
        <p>Sign in and have fun xD!</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <a href="/library/signin/" ><button type="button" class="btn btn-primary">Signin</button></a>
      </div>
    </div>
  </div>
</div>
<?php
        
        header('Location: /library/signin');
        
	}
	else
		echo "<h3>HELLO , WORLD ... Something went wrong,,.. :(</h> ";// Error reporting 
	 
    
	
?>