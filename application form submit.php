<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soft Innovation</title>
<script type="text/javascript" src="CCH.js"></script>
</head>
<link href="graphics.css" type="text/css" rel="stylesheet" media="screen" />

<body>
<div align="center"><img src="graphics/logo.png" width="532" height="91" id="logo1"; /></div>

<?php
$Name=$_POST['name'];
$f_Name=$_POST['f_name'];
$date=$_POST['date'];
$subject=$_POST['subject'];
$email=$_POST['email'];
$cnic=$_POST['cnic'];
$address=$_POST['address'];
$mobile=$_POST['mobile'];
$res_no=$_POST['res_no'];
$ba=$_POST['ba'];
$ma=$_POST['ma'];
$date_of_birth=$_POST['dob'];
$sex=$_POST['sex'];
$expre=$_POST['expre'];
$con = mysqli_connect("localhost","root","","school");
if(!$con)
{
 die("could not connect:" .mysql_error()); 
}

$query="INSERT INTO `staff`(`Sr_no`, `name`,`f_name`,`date_birth`, `sex`, `cnic`, `date`, `address`,`education_ba`,`education_ma`, `res_no`, `mobile`, `subject`,`email`,`experience`) VALUES (' ','$Name','$f_Name','$date_of_birth','$sex','$cnic','$date','$address','$ba','$ma','$res_no','$mobile','$subject','$email','$expre')";

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