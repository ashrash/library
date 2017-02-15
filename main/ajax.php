<?php
$a[]="";
require'config.php';
 // get the q parameter from URL
$q = $_REQUEST['q'];
$search=explode(" ",$q);
$qry1="SELECT id,title,pub_date,Author FROM books";
			$result= mysqli_query($conn,$qry1);
$flag=0;
$c=0;
for($i=0;$i<strlen($q);$i++)
{
	if($q[$i] == ' ')
		$c++;
}
    while($row=mysqli_fetch_array($result)) 
{
				$title=$row[1];
				$date=$row[2];
				$author=$row[3];
            if($title!="" || $author!="")
            {
                for($i=0;$i<=$c;$i++)
                {
					if($search[$i]!="")
					{
                    	if(strpos(strtolower($author),strtolower($search[$i])) !== false)
                    	{
							$flag=1;
                        	echo "<blockquote>";
		                	echo "<h2><b>$title</b></h2>";
				        	echo "$author";
				        	echo "<footer><i>$date</i></footer>";
                            ?><a href="withdraw.php?q=<?php echo $row[0]; ?>">Withdraw <span class="glyphicon glyphicon-eject" aria-hidden="true"></span></a>
<?php
				        	echo"</blockquote>";
                            
                    	}
                        else if(strpos(strtolower($title),strtolower($search[$i])) !== false)
                    	{
								$flag=1;
                        	echo "<blockquote>";
		                	echo "<h2><b>$title</b></h2>";
				        	echo "$author";
				        	echo "<footer><i>$date</i></footer>";
                            ?><a href="withdraw.php?q=<?php echo $row[0]; ?>">Withdraw <span class="glyphicon glyphicon-eject" aria-hidden="true"></span></a>
<?php
				        	echo"</blockquote>";
                            
                    	}
					}
                }
            }
	}
if($flag==0)
                echo "No results found!!!";
?>