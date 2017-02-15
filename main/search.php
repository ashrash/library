<?php
session_start();
require'temp.html';

?>
<html>
<head> 
<script>
function showHint(str) {
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "ajax.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>
</head>
  <style>
      h3
      {
          padding-left: 3cm;
      }
    </style>
<body>

      </br>

      </br>

      </br>

      </br>

      </br>
    <form action="" id="pform" method="post" class="form-horizontal">
    <div class="form-group">
     <span class="glyphicon glyphicon-search" aria-hidden="true"></span>   <label class="col-sm-3 control-label"><font color="white" >Search:</font></label>
        <div class="col-sm-5">
            <input type="text" class="form-control" name="user_name" onkeyup="showHint(this.value)" />
        </div>
    </div>
    </form>
    </br>
   
<hr width="80%"size="20" >
<h3>Results: <span id="txtHint"></span></h3>

</body>
</html>