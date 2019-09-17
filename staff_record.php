<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soft Innovation</title>
<script type="text/javascript" src="CCH.js"></script>
</head>
<link href="graphics.css" type="text/css" rel="stylesheet" media="screen" />

<body>
<div align="left"><a href="staff.php"><img src="graphics/back.png" width="90" height="75" /></a><a href="http://localhost/School/menu.html"><img src="graphics/Home-icon.png" width="67" height="64" /></a></div>
<div align="center" id="logo"><img src="graphics/thunderbird_logo-only_RGB.png" width="575" height="118""; /></div>
<div align="center" id="fee">
  <h1><em>Registered Staff Members</em></h1></div>
<?php

$con = mysqli_connect("localhost", "root", "","school"); 
if(!$con)
{
 die("could not connect:" .mysql_error()); 
}
$result = mysqli_query($con,"SELECT * FROM staff"); 
?>
<div align="center"><table width="93%" style="width:90%">
<?php
echo "<b><tr><th>" .'Sr. #'. "</th><th>".'Name'."</th><th>" .'Father Name'."</th><th>" .'ID Card No.'."</th><th>" .'Subject'."</th><th>" .'Date of Birth'."</th><th>" .'Gender'."</th><th>" .'Bachelor Degree'."</th><th>" .'Master Degree'."</th><th>" .'Experience'."</th><th>" .'Address'."</th><th>" .'Email'."</th><th>" .'Contact'."</th></tr><br/></b>";

while($row = mysqli_fetch_array($result))
  {
echo "<tr><td>".$row['Sr_no']. 
  "</td><td> " .$row['name'].
  "</td><td> " .$row['f_name'].
  "</td><td> " .$row['cnic'].
  "</td><td> " .$row['subject']. 
"</td><td> " .$row['date_birth'].
"</td><td> " .$row['sex'].
"</td><td> " .$row['education_ba'].
"</td><td> " .$row['education_ma'].
"</td><td> " .$row['experience']. 
"</td><td> " .$row['address'].
"</td><td> " .$row['email'].
"</td><td> " .$row['mobile']. 
"</td></tr>";
}
?>
</table></div>

</div>

</body>
</html>