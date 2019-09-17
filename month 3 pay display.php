<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soft Innovation</title>
<script type="text/javascript" src="CCH.js"></script>
</head>
<link href="graphics.css" type="text/css" rel="stylesheet" media="screen" />

<body>
<div align="left"><a href="Pay monthly display.php"><img src="graphics/back.png" width="90" height="75" /></a><a href="http://localhost/School/menu.html"><img src="graphics/Home-icon.png" width="67" height="64" /></a></div>
<div align="center" id="pays"><img src="graphics/logo.png" width="532" height="91" id="logo1"; /></div>

<div align="center" id="pay_month">
  <h1><em>March Pays Record</em></h1></div>

<?php
$con = mysqli_connect("localhost","root","","school"); 
if(!$con)
{
 die("could not connect:" .mysql_error()); 
}
	
?>
<table align="center" width="80%">
<?php
echo "<b><tr><th>" .'Account / Sr no.'. "</th><th>" .'Name'. "</th><th>".'Date'."</th><th>" .'Amount Payed'."</th></tr><br/></b>";
$result = mysqli_query($con,"SELECT * FROM teacher_3");
while($row = mysqli_fetch_array($result)){
echo "<tr><td>".$row['Sr_no'].
    "</td><td> " .$row['name']. 
  "</td><td> " .$row['date'].
  "</td><td> " .$row['pay'].  
"</td></tr>";
}

?>
</table></div>

</body>
</html>
