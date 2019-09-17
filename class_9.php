<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soft Innovation</title>
<script type="text/javascript" src="CCH.js"></script>
</head>
<link href="graphics.css" type="text/css" rel="stylesheet" media="screen" />

<body>
<div align="left"><a href="class.php"><img src="graphics/back.png" width="90" height="75" /></a><a href="http://localhost/School/menu.html"><img src="graphics/Home-icon.png" width="67" height="64" /></a></div>
<div align="center"><img src="graphics/logo.png" width="532" height="91" id="logo1"; /></div>

<div align="center" id="fee">
  <h1><em><strong>Class 9 Students</strong></em></h1></div>

<?php
$con = mysqli_connect("localhost","root","","school"); 
if(!$con)
{
 die("could not connect:" .mysql_error()); 
}
	
?>
<table align="center" width="80%">
<?php
echo "<b><tr><th>" .'Roll. #'. "</th><th>" .'Reg. #'. "</th><th>".'Student Name'."</th><th>" .'Father Name'."</th><th>" .'Date of Birth'."</th><th>" .'Gender'."</th><th>" .'Address'."</th><th>" .'Contact'."</th></tr><br/></b>";
$result = mysqli_query($con,"SELECT * FROM new_admission");
while($row = mysqli_fetch_array($result))
  {if($row['class']==9){
echo "<tr><td>".$row['roll_no'].
    "</td><td> " .$row['reg_no']. 
  "</td><td> " .$row['s_name'].
  "</td><td> " .$row['f_name']. 
"</td><td> " .$row['date_birth'].
"</td><td> " .$row['sex']. 
"</td><td> " .$row['address'].
"</td><td> " .$row['mobile']. 
"</td></tr>";
}
}
?>
</table></div>

</body>
</html>
