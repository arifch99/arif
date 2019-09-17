<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soft Innovation</title>
<script type="text/javascript" src="CCH.js"></script>
</head>
<link href="graphics.css" type="text/css" rel="stylesheet" media="screen" />

<body>
<div align="left"><a href="Admin files main.php"><img src="graphics/back.png" width="90" height="75" /></a><a href="http://localhost/School/menu.html"><img src="graphics/Home-icon.png" width="67" height="64" /></a></div>
<div align="center"><img src="graphics/logo.png" width="564" height="91" id="logo11"; /></div>

<div align="center">
  <h1 id="fee"><strong><em>Admin Files</em></strong></h1>
</div>
<?php
  $con=mysql_connect("localhost","root","");
                mysql_select_db("school",$con);
                $qry="select * from admin";
                $result=mysql_query($qry,$con);
                while($row = mysql_fetch_array($result))
                {
                    echo '<iframe src="data:image;base64,'.$row[2].'" download width="17%" height="40%"> </iframe>';     echo $row['name'];
		echo '&nbsp;&nbsp;&nbsp;'; 
                }
				
				
                mysql_close($con);   
            
?>

</body>
</html>