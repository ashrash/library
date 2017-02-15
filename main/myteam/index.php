
<?php
session_start();
require'template.html';

?>

<html>
    <style>
.abc{
    padding-top: 7cm;
}
        #table
        {
            padding-top: 2cm;
            padding-left: 6cm;
        }
        #table1
        {
            color: red;
        }
	</style>
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
               
				<tbody>
				 
                    <?php
                     require'/home/a4613629/public_html/library/config.php'; 
                        $roll=$_SESSION['email'];
                      //  $query="select tuser_id,tuser_id,status from request where  request.fuser_id='$roll'";
                        $query="select team_id from account where email='$roll'";
                        $res=mysqli_query($connect,$query);
                        $row=mysqli_fetch_row($res);
                        echo  implode(" ",$row);
                        $query="select tuser_id,name,status from request,account where team_id='$roll'";
                        
                        echo $q