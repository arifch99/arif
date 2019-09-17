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
  <h1><em>Staff Members</em></h1></div>
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
echo "<b><tr><th>".'Name'."</th><th>" .'Father Name'."</th><th>" .'ID Card No.'."</th><th>" .'Pay'."</th></tr><br/></b>";

while($row = mysqli_fetch_array($result))
  {
echo "<tr><td>".$row['name']. 
  "</td><td> " .$row['f_name'].
  "</td><td> " .$row['cnic'].
"</td><td> " .$row['pay']. 
"</td></tr>";
}
?>
</table></div>

</div>

</body>
</html>