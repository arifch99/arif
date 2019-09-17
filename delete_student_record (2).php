
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soft Innovation</title>
<script type="text/javascript" src="CCH.js"></script>
</head>
<link href="graphics.css" type="text/css" rel="stylesheet" media="screen" />

<body>
<div align="left"><a href="delete_student_record (1).php"><img src="graphics/back.png" width="90" height="75" /></a><a href="http://localhost/School/menu.html"><img src="graphics/Home-icon.png" width="67" height="64" /></a></div>
<div align="center"><img src="graphics/logo.png" name="logo1" width="544" height="92" id="logo1"; /></div>
<br/>
<br/>
<div align="center">
<h1 id="fee"><em>Delete Student Record Portal</em></h1></div>
<br/>
<?php
$con = mysqli_connect("localhost","root","","school"); 
if(!$con)
{
 die("could not connect:" .mysql_error()); 
}
$class=$_POST['class'];
$roll=$_POST['roll'];
$reg=$_POST['reg'];

$result = mysqli_query($con,"SELECT * FROM new_admission ");
while($row = mysqli_fetch_array($result))
  {if($row['class']==$class){
	  if($roll==$row['roll_no']){
		  
		$sql = "DELETE FROM new_admission WHERE reg_no=$reg";

if ($con->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $con->error;
}break;}

}}	
?>
</body>
</html>