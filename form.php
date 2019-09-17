<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soft Innovation</title>
<script type="text/javascript" src="CCH.js"></script>
</head>
<link href="graphics.css" type="text/css" rel="stylesheet" media="screen" />

<body>
<div align="left"><a href="new admissions.php"><img src="graphics/back.png" width="90" height="75" /></a><a href="http://localhost/School/menu.html"><img src="graphics/Home-icon.png" width="67" height="64" /></a></div>
<div align="center"><img src="graphics/logo.png" width="564" height="91" id="logo11"; /></div>
<?php
$S_Name=$_POST['s_name'];
$f_Name=$_POST['f_name'];
$date=$_POST['date'];
$class=$_POST['class'];
$roll_no=$_POST['roll_no'];
$cnic=$_POST['cnic'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$res_no=$_POST['res_no'];
$f_occu=$_POST['f_occu'];
$date_of_birth=$_POST['date_of_birth'];
$sex=$_POST['sex'];
$con = mysqli_connect("localhost","root","","school");
if(!$con)
{
 die("could not connect:" .mysql_error()); 
}

$query="INSERT INTO `new_admission`(`reg_no`, `roll_no`,`s_name`,`f_name`, `date_birth`, `sex`, `cnic`, `date`,`address`,`f_occupation`, `res_no`, `mobile`, `class`) VALUES (' ','$roll_no','$S_Name','$f_Name ','$date_of_birth','$sex','$cnic','$date','$address','$f_occu','$res_no','$mobile','$class')";

if (mysqli_query($con,$query))
{
echo 'Added';
}
else{
echo mysqli_error($con);
}
?>

</body>
</html>