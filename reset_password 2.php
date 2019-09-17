<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soft Innovation</title>
<script type="text/javascript" src="CCH.js"></script>
</head>
<link href="graphics.css" type="text/css" rel="stylesheet" media="screen" />

<body>
<div align="left"><a href="front_Page.php"><img src="graphics/Home-icon.png" width="67" height="64" /></a></div>
<div align="center"><img src="graphics/logo.png" width="564" height="91" id="logo11"; /></div>
<br/><br/><div align="center" id="fee">
  <h2><em><strong>Reset Password</strong></em></h2>
</div>
<?php
$pin=$_POST['pin'];
$password=$_POST['pass'];
$cpassword=$_POST['cpass'];
if($pin == 'arif'){
	if($password == $cpassword){
$con = mysqli_connect("localhost","root","","school"); 
if(!$con)
{
 die("could not connect:" .mysql_error()); 
}
$query="UPDATE  password
SET pass='{$password}'
WHERE sr_no='1';"; 


if (mysqli_query($con,$query))
{
}
else{
echo mysqli_error($con);
}
}

else{
?>
<div align="center" id="reset_pass">
<?php
echo '*Password not matched';
}
}else{
	echo'*Secured Pin is incorrect';}
?>
</div>
        <div align="center"><form method="post" action="reset_password 2.php">
          <p>       
  Secured Pin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
    <input type="text" name="pin" /><br/><br/>
  New Password &nbsp;&nbsp;&nbsp;    
  <input type="text" name="pass" /><br/><br/>
  Confirm Password 
  <input type="text" name="cpass" /><br/>
            <br/><br/>
            <input type="submit" name="sumit" value="Reset Password" />
          </form>
        </div>
            
                    
</body>
</html>
