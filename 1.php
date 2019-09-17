
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soft Innovation</title>
<script type="text/javascript" src="CCH.js"></script>
</head>
<link href="graphics.css" type="text/css" rel="stylesheet" media="screen" />

<body>
<?php
$pass=$_POST['password'];
$con = mysqli_connect("localhost","root","","school"); 
if(!$con)
{
 die("could not connect:" .mysql_error()); 
}
$result = mysqli_query($con,"SELECT * FROM password");
while($row = mysqli_fetch_array($result))
{

	if($pass==$row['pass']){
		header("location:menu.html?uid=".$userID);
	}
	else{
		?>
<br/>
<div align="center"><img src="graphics/welcome.png" width="357" height="107" /></div>
<br/>
<div align="center" id="welcome"><img src="graphics/logo.png" /><br/><br/>

<form method="post" action="1.php">
<input type="password" size="22%" id="password" name="password" />  &nbsp;
<a href="reset_password.php"><img src="graphics/refresh.png" alt="Reset Password" width="27" height="23" /></a> <br/><br/>
<button>Proceed</button>
</form>
<?php
	 echo "*Password do not match!";
	  
  }}
 
?>
</div>
<br/>
<br/>
<br/>
<br/>
<div id="kake"><img src="graphics/happy-kids-going-to-school-school-bag-24523240.jpg" width="257" height="321" /></div>

</body>
</html>
