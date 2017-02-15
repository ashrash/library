<?php
    session_start();
    $q = $_REQUEST["q"];
    $roll=$_SESSION['email'];
    if($q==$roll)
        echo "4"."!";
    else
    {
        include'/home/a4613629/public_html/library/config.php';
        $query="select count(*) from request where fuser_id='$roll'";
        $res=mysqli_query($connect,$query);
        $row=mysqli_fetch_row($res);
        if($row[0]>=3)
            echo "6"."!";
        else
        {
        $query="Select status from request where tuser_id='$q' and fuser_id='$roll'";
        $res=mysqli_query($connect,$query);
        if(!mysqli_num_rows($res))
        {
            $query="Select email,name from account where email='$q'";
            $res=mysqli_query($connect,$query);
            if(mysqli_num_rows($res))
            {
                $query="Select email,name from account where email='$q' and team_id=0";
                $res1=mysqli_query($connect,$query);
                if(mysqli_num_rows($res1))
                {
                    $row = mysqli_fetch_row($res);
                    $query="Insert into request(fuser_id,tuser_id,status) values('$roll','$row[0]',0)"; 
                    $res1=mysqli_query($connect,$query);               
                    
                    
                    if(!$res1)
                        echo "3"."!";
                    else
                        echo $row[0]."+".$row[1]."!";
                }
                else
                    echo "1"."!";
            }
            else
                echo "2"."!";
        }
        else
            echo "5"."!";
        }
    }
?>
