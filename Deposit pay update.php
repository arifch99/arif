
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soft Innovation</title>
<script type="text/javascript" src="CCH.js"></script>
</head>
<link href="graphics.css" type="text/css" rel="stylesheet" media="screen" />

<body>
<div align="left"><a href="Deposit pay.php"><img src="graphics/back.png" width="90" height="75" /></a><a href="http://localhost/School/menu.html"><img src="graphics/Home-icon.png" width="67" height="64" /></a></div>
<div align="center"><img src="graphics/logo.png" name="logo1" width="544" height="92" id="logo1"; /></div>
<br/>
<br/><br/>

<?php
$con = mysqli_connect("localhost","root","","school"); 
if(!$con)
{
 die("could not connect:" .mysql_error()); 
}
$name=$_POST['name'];
$month=$_POST['month'];
$date=$_POST['date'];
$pay=$_POST['pay'];
$sr=$_POST['sr'];
switch($month){
	case"1":{
		$query1="INSERT INTO `teacher_1`(`Sr_no`,`name`,`date`,`pay`) VALUES ('$sr','$name','$date','$pay')";
	}break;
case"2":{
		$query1="INSERT INTO `teacher_2`(`Sr_no`,`name`,`date`,`pay`) VALUES ('$sr','$name','$date','$pay')";
	}break;
case"3":{
		$query1="INSERT INTO `teacher_3`(`Sr_no`,`name`,`date`,`pay`) VALUES ('$sr','$name','$date','$pay')";
	}break;
case"4":{
		$query1="INSERT INTO `teacher_4`(`Sr_no`,`name`,`date`,`pay`) VALUES ('$sr','$name','$date','$pay')";
	}break;
case"5":{
		$query1="INSERT INTO `teacher_5`(`Sr_no`,`name`,`date`,`pay`) VALUES ('$sr','$name','$date','$pay')";
	}break;
case"6":{
		$query1="INSERT INTO `teacher_6`(`Sr_no`,`name`,`date`,`pay`) VALUES ('$sr','$name','$date','$pay')";
	}break;
case"7":{
		$query1="INSERT INTO `teacher_7`(`Sr_no`,`name`,`date`,`pay`) VALUES ('$sr','$name','$date','$pay')";
	}break;
case"8":{
		$query1="INSERT INTO `teacher_8`(`Sr_no`,`name`,`date`,`pay`) VALUES ('$sr','$name','$date','$pay')";
	}break;
case"9":{
		$query1="INSERT INTO `teacher_9`(`Sr_no`,`name`,`date`,`pay`) VALUES ('$sr','$name','$date','$pay')";
	}break;
case"10":{
		$query1="INSERT INTO `teacher_10`(`Sr_no`,`name`,`date`,`pay`) VALUES ('$sr','$name','$date','$pay')";
	}break;
case"11":{
		$query1="INSERT INTO `teacher_11`(`Sr_no`,`name`,`date`,`pay`) VALUES ('$sr','$name','$date','$pay')";
	}break;
case"12":{
		$query1="INSERT INTO `teacher_12`(`Sr_no`,`name`,`date`,`pay`) VALUES ('$sr','$name','$date','$pay')";
	}break;
}

if (mysqli_query($con,$query1))
{
echo '<br/><br/><br/><br/>&nbsp;&nbsp;&nbsp;1 Pay Record Updated successfuuly';
}
else{
	echo 'An Error occur!!!!!';
	echo 'Check Your DataBase Connection!!!!!';
echo mysqli_error($con);
}
?>
</body>
</html>