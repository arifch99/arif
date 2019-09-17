
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soft Innovation</title>
<script type="text/javascript" src="CCH.js"></script>
</head>
<link href="graphics.css" type="text/css" rel="stylesheet" media="screen" />

<body>
<div align="left"><a href="pay.php"><img src="graphics/back.png" width="90" height="75" /></a><a href="http://localhost/School/menu.html"><img src="graphics/Home-icon.png" width="67" height="64" /></a></div>
<div align="center" ><img src="graphics/logo.png" name="logo1" width="544" height="92" id="logo1"; /></div>
<br/>
<br/><br/>
<div align="center" id="rollno">
 <h2><em>Enter Pay Record</em></h2><br/>
 
<form method="post" action="Deposit pay update.php">
Date. <input type="text" id="date" name="date" size="8%"><br/><br/> 
Month <select name="month">
  <option value="1">January</option>
  <option value="2">February</option>
  <option value="3">March</option>
  <option value="4">April</option>
  <option value="5">May</option>
  <option value="6">June</option>
  <option value="7">July</option>
  <option value="8">August</option>
  <option value="9">September</option>
  <option value="10">October</option>
  <option value="11">November</option>
  <option value="12">December</option>
</select>
<br/><br/>Staff Member Name
<input type="text" id="name" name="name" size="22%">
<br/><br/>Staff Member Account / Sr. Number
<input type="text" id="sr" name="sr" size="15%">
<br/><br/>Amount Payed
<input type="text" id="pay" name="pay" size="11%"><br/><br/>
<button>Update</button></div>
</form>

</body>
</html>