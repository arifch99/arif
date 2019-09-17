
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soft Innovation</title>
<script type="text/javascript" src="CCH.js"></script>
</head>
<link href="graphics.css" type="text/css" rel="stylesheet" media="screen" />

<body>
<div align="left"><a href="month january.php"><img src="graphics/back.png" width="90" height="75" /></a><a href="http://localhost/School/menu.html"><img src="graphics/Home-icon.png" width="67" height="64" /></a></div>
<div align="center" id="logo"><img src="graphics/logo.png" name="logo1" width="544" height="92" id="logo1"; /></div>
<br/>
<br/><br/>

<?php
$con = mysqli_connect("localhost","root","","school"); 
if(!$con)
{
 die("could not connect:" .mysql_error()); 
}
$roll=$_POST['roll'];
$class=$_POST['class'];
$date=$_POST['date'];
$fee=$_POST['fee'];
$query1="INSERT INTO `april`(`roll_no`,`class`,`fee`,`date`) VALUES ('$roll','$class','$fee','$date')";
if (mysqli_query($con,$query1))
{
echo '<br/><br/><br/><br/>&nbsp;&nbsp;&nbsp;Fee Deposited successfuuly';
}
else{
	echo 'An Error occur!!!!!';
	echo 'Check Your DataBase Connection!!!!!';
echo mysqli_error($con);
}
?>
</body>
</html>