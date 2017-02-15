<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">                                                                                               
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Project</title>
    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">
    <link href="/library/css/bootstrap.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 <?php
        session_start();
    	if(!isset($_SESSION['email']))
	   	   	header('Location: /library/signin/');
    ?>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<style>
.abc{
    padding-top: 7cm;
}
        #table
        {
            padding-top: 6cm;
            padding-left: 8cm;
        }
        #table1
        {
            color: red;
        }
	</style>
	<?php

    require('../temp.html');
    
    ?>
	<!-- active,success,danger,warning-->
  </head>
  <body>
	<div id="table">
      <div class="container-fluid">
	<div class="row">
		<div class="col-sm-8">
			<table id="mytable" class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>
							#
						</th>
                        
						<th>
							Student
						</th>
						<th>
							Roll number
						</th>
						<th>
							Status
						</th>                        
					</tr>
				</thead>
                <form action="submit.php" method="post">
				<tbody>
				 
                    <?php
                     require'/home/a4613629/public_html/library/config.php';
                        $roll=$_SESSION['email'];
                        $query="select fuser_id,name,status from request,account where tuser_id='$roll' AND request.fuser_id=account.email";
                        $res=mysqli_query($connect,$query);
                        $i=0;
                        while($row=mysqli_fetch_row($res))
                        {
                         $i++;   
                       if($row[2]==0)
                                $class='warning';
                            else if($row[2]==1)
                                $class='success';
                            else if($row[2]==-1)
                                $class='danger';
                    ?>
                    <tr class="<?php echo $class; ?>">
                        
                        <td><input id="myradio" type="radio" name="roll_no" value="<?php echo $row[0]; ?>">
                            <?php echo $i;?>
                            
                        </td>
                        <td><?php echo $row[1]; ?></td>
                     <td><?php echo $row[0]; ?></td>
                     <td><?php 
                            if($row[2]==0)
                                echo'Pending';
                            else if($row[2]==1)
                                echo'Accepted';
                            else if($row[2]==-1)
                                echo'Declined';
                         ?></td>
                        
                        </tr>	
                <?php
                     }
                     ?>
				</tbody>
			</table>
         <p id="table1"></p>       
      <center>    <button onclick="showHint()" class="btn btn-success" >submit</button></center>
				</form>
		</div>
	</div>
</div>
          </div>
</body>
</html>