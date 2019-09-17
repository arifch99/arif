
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soft Innovation</title>
<script type="text/javascript" src="CCH.js"></script>
</head>
<link href="graphics.css" type="text/css" rel="stylesheet" media="screen" />

<body>
<div align="left"><a href="delete_exam_result.php"><img src="graphics/back.png" width="90" height="75" /></a><a href="http://localhost/School/menu.html"><img src="graphics/Home-icon.png" width="67" height="64" /></a></div>
<div align="center"><img src="graphics/logo.png" name="logo1" width="544" height="92" id="logo1"; /></div>
<br/>
<br/>
<div align="center">
<h1 id="fee"><em>Exam Result Update Portal</em></h1></div>
<br/>
<?php
$con = mysqli_connect("localhost","root","","school"); 
if(!$con)
{
 die("could not connect:" .mysql_error()); 
}
$exam=$_POST['exam'];
$class=$_POST['class'];
$roll=$_POST['roll'];

if($exam == 1){
	switch($class){
	case"1":{
		$sql = "DELETE FROM 1_1 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"2":{
		$sql = "DELETE FROM 1_2 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"3":{
		$sql = "DELETE FROM 1_3 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"4":{
		$sql = "DELETE FROM 1_4 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"5":{
		$sql = "DELETE FROM 1_5 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"6":{
		$sql = "DELETE FROM 1_6 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"7":{
		$sql = "DELETE FROM 1_7 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"8":{
		$sql = "DELETE FROM 1_8 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"9":{
		$sql = "DELETE FROM 1_9 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"10":{
		$sql = "DELETE FROM 1_10 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"11":{
		$sql = "DELETE FROM 1_11 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"12":{
		$sql = "DELETE FROM 1_12 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"Nursery":{
		$sql = "DELETE FROM 1_nur WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"Kg-1":{
		$sql = "DELETE FROM 1_kg1 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"Kg-2":{
		$sql = "DELETE FROM 1_kg2 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
}}

if($exam == 2){
	switch($class){
	case"1":{
		$sql = "DELETE FROM 2_1 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"2":{
		$sql = "DELETE FROM 2_2 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"3":{
		$sql = "DELETE FROM 2_3 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"4":{
		$sql = "DELETE FROM 2_4 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"5":{
		$sql = "DELETE FROM 2_5 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"6":{
		$sql = "DELETE FROM 2_6 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"7":{
		$sql = "DELETE FROM 2_7 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"8":{
		$sql = "DELETE FROM 2_8 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"9":{
		$sql = "DELETE FROM 2_9 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"10":{
		$sql = "DELETE FROM 2_10 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"11":{
		$sql = "DELETE FROM 2_11 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"12":{
		$sql = "DELETE FROM 2_12 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"Nursery":{
		$sql = "DELETE FROM 2_nur WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"Kg-1":{
		$sql = "DELETE FROM 2_kg1 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"Kg-2":{
		$sql = "DELETE FROM 2_kg2 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
}}

if($exam == 3){
	switch($class){
	case"1":{
		$sql = "DELETE FROM 3_1 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"2":{
		$sql = "DELETE FROM 3_2 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"3":{
		$sql = "DELETE FROM 3_3 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"4":{
		$sql = "DELETE FROM 3_4 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"5":{
		$sql = "DELETE FROM 3_5 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"6":{
		$sql = "DELETE FROM 3_6 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"7":{
		$sql = "DELETE FROM 3_7 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"8":{
		$sql = "DELETE FROM 3_8 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"9":{
		$sql = "DELETE FROM 3_9 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"10":{
		$sql = "DELETE FROM 3_10 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"11":{
		$sql = "DELETE FROM 3_11 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"12":{
		$sql = "DELETE FROM 3_12 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"Nursery":{
		$sql = "DELETE FROM 3_nur WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"Kg-1":{
		$sql = "DELETE FROM 3_kg1 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
case"Kg-2":{
		$sql = "DELETE FROM 3_kg2 WHERE roll_no=$roll";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}
}}	
?>
</body>
</html>