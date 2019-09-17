<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soft Innovation</title>
<script type="text/javascript" src="CCH.js"></script>
</head>
<link href="graphics.css" type="text/css" rel="stylesheet" media="screen" />

<body>
<div align="left"><a href="fee.php"><img src="graphics/back.png" width="90" height="75" /></a><a href="http://localhost/School/menu.html"><img src="graphics/Home-icon.png" width="67" height="64" /></a></div>
<div align="center"><img src="graphics/logo.png" width="564" height="91" id="logo11"; /></div>
<div align="center" id="monthly" >
  <h1><em>February Fee Record</em></h1></div>
<?php
$con = mysqli_connect("localhost","root","","school"); 
if(!$con)
{
 die("could not connect:" .mysql_error()); 
}
	
?>
<table align="center" width="80%">
<?php
echo "<b><tr><th>" .'Name'. "</th><th>" .'Father Name'. "</th><th>" .'Class'. "</th><th>" .'Roll No.'. "</th><th>" .'Fee'."</th><th>" .'Deposit Date'."</th></tr><br/></b>";
$result1 = mysqli_query($con,"SELECT * FROM feb ");
while($row1 = mysqli_fetch_array($result1)){

$result = mysqli_query($con,"SELECT * FROM new_admission ");
while($row = mysqli_fetch_array($result))
  {if($row['class']==$row1['class']){
	  if($row1['roll_no']==$row['roll_no']){
		
echo "<tr><td>".$row['s_name']. 
   "</td><td> " .$row['f_name'].
  "</td><td> " .$row1['class'].
  "</td><td> " .$row['roll_no'].
"</td><td> " .$row1['fee']. 
"</td><td> " .$row1['date']. 
"</td></tr>";

}}}}
?>
</table></div>

</body>
</html>