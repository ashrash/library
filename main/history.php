
<?php
session_start();
require'temp.html';

?>

<html>
    <style>
.abc{
    padding-top: 7cm;
}
        #table
        {
            padding-top: 5cm;
            padding-left: 7cm;
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
							Book title / ISBN
						</th>
						<th>
							Withdraw date
						</th>
						<th>
							Status
						</th>  
                        <th>
							Return
						</th> 
					</tr>
				</thead>
               
				<tbody>
				 
                    <?php
                     require'config.php'; 
                     $i=1;
                        $userid=$_SESSION['id'];
                        $query="select * from withdraw where user_id='$userid'";
                    
                         $res=mysqli_query($conn,$query);
                        while($row=mysqli_fetch_row($res))
                        { 
                    $bookid=$row[2];
                        $query1="Select title from books where id='$bookid'";
                     $res1=mysqli_query($conn,$query1);
                        $row1=mysqli_fetch_row($res1); 
                        ?>
                             <tr> 
                     <td> <?php echo $i++; ?></td> 
                     <td><?php echo $row1[0]; ?></td>
                     <td><?php echo $row[3];?></td>
                                 
                     <td> <?php
                            if($row[4]==" ")
                            {
                                echo 'Pending';
                            }
                            else
                            {
                                echo $row[4];
                            }
                            ?></td>
                    <td> <?php
                            if($row[4]==" ")
                            {
                            ?>
                            <a href="return.php?r=<?php echo $bookid; ?>">Return</a>
                        <?php
                        }
                        ?></td>    
                        </tr>	
                    <?php } ?>
				</tbody>
			</table>