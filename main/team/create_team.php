<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Project</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="/library/css/bootswatch.css" rel="stylesheet">
 
    <?php
   
    	if(!isset($_SESSION['email']))
	   	   	header('Location: /library/signin/');
    ?>
<script>
function showHint(str) {
    document.getElementById("table1").innerHTML = "";   
    if (str.length == 0) { 
        document.getElementById("table1").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                
                  
                
                var res = xmlhttp.responseText.split("!");
                
                if(res[0]==1)       
                  document.getElementById("table1").innerHTML=  'This roll number has already been alloted a team!!!';
                else if(res[0]==2)
                    document.getElementById("table1").innerHTML=  'Invalid Rollnumber!!!';
                else if(res[0]==3)
                    document.getElementById("table1").innerHTML=  'An error occurred!!!';
                else if(res[0]==4)
                    document.getElementById("table1").innerHTML=  'The roll number is yours!!!';
                else if(res[0]==5)
                    document.getElementById("table1").innerHTML=  'Roll number already added!!!';
                else if(res[0]==6)
                    document.getElementById("table1").innerHTML=  'Only 4 members per team!!';
                else
                { 
                  
                    var res = xmlhttp.responseText.split("+");
                    var table = document.getElementById('mytable');
                    var row = table.insertRow(-1);
                    row.className = 'warning';
                    var cell1 = row.insertCell(0);
                    var cell2 = row.insertCell(1);
                    var cell3 = row.insertCell(2);
                    var cell4 = row.insertCell(3);
                    cell1.innerHTML = table.rows.length-1;
                    cell2.innerHTML = res[2];
                    cell3.innerHTML = res[1];
                    cell4.innerHTML = 'Pending';
                       
                } 
                roll.value=""; 
            } 
        };
        xmlhttp.open("GET", "get.php?q=" + str, true);
        xmlhttp.send();
        
    }
}
</script>
    
    

	<style>
.abc{
    padding-top: 7cm;
}
        #table
        {
            padding-top: 4cm;
            padding-left: 8cm;
        }
        #table1
        {
            color: red;
        }

	</style>
	<?php
    
    require('../template.html');
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
                
				<tbody>
				 
                    <?php
                          
                        include'/home/a4613629/public_html/library/config.php';
                        $roll=$_SESSION['email'];
                        $q="Select team_id from account where email='$roll'";
                       
                        $res=mysqli_query($connect,$q);
                        
                        $row = mysqli_fetch_row($res);
                   if($row[0]=="")
                   {
                        
                            header('Location: http://www.btech.cf/library/main/');
                    }
                    
                      $query="select tuser_id,name,status from request,account where fuser_id='$roll' AND request.tuser_id=account.email";
                        //echo $query;
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
                     <td><?php echo $i;?></td>
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
 
        
				<div class="form-group">
			<label class="col-sm-3 control-label"><strong>Roll no</strong></label>
			<div class="col-sm-5">
				<input class="form-control" id="roll" name="email" type="text" placeholder="Ex. CB.EN.U4CSE13001"
					data-bv-notempty="true" />
			</div>
                    <button onclick="showHint(roll.value)" class="btn btn-success" >Add member</button>
		</div>
         <p id="table1"></p>       
        
            
		</div>
	</div>
</div>
          </div>
</body>
</html>