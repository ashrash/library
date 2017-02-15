
     <link href="/library/css/bootstrap.min.css" rel="stylesheet">
      <link href="/library/css/jquery-3.1.1.min.js" rel="stylesheet">
<style>
    .row
    {
        padding-left: 3cm;
        padding-top: 3cm;
    }
</style>
<div class="container-fluid">
	<div class="row">
      

<?php
 
     $query= "Select title,Author,genre,category from books order by title asc";
    $res=mysqli_query($conn,$query);
         
    while($row=mysqli_fetch_row($res))
    {
?>
        <div class="col-md-4">
		
		<div class="list-group">
  <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading">
				<?php 
            echo  $row[0];
        ?></h4>
    <p class="list-group-item-text"><?php echo $row[1]."<br>".$row[2]."<br>".$row[3]."<br>"; ?></p>
  </a>
  
</div>
            </div> 
<?php
    }
                            require('../temp.html');
        ?>
        </div>
</div>
