
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soft Innovation</title>
<script type="text/javascript" src="CCH.js"></script>
</head>
<link href="graphics.css" type="text/css" rel="stylesheet" media="screen" />

<body>
<div align="left"><a href="setting.php"><img src="graphics/back.png" width="90" height="75" /></a><a href="http://localhost/School/menu.html"><img src="graphics/Home-icon.png" width="67" height="64" /></a></div>
<div align="center"><img src="graphics/logo.png" name="logo1" width="544" height="92" id="logo1"; /></div>
<br/>
<br/>
<div align="center">
<h1 id="fee"><em>Delete Student Record</em></h1></div>
<br/>
<div align="center" id="rollno">
 <h2><em>Select Class and Enter Roll Number to delete specific Student All record</em> </h2>
 <br/>
<form method="post"  action="delete_student_record (2).php">
Class <select name="class">
  <option value="Nursery">Nursery</option>
  <option value="Kg-1">KG-1</option>
  <option value="Kg-2">KG-2</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
</select>
&nbsp;&nbsp;&nbsp;&nbsp;Reg No.
<input type="text" id="reg" name="reg" size="8%">&nbsp;&nbsp;&nbsp;&nbsp;Roll No.
<input type="text" id="roll" name="roll" size="8%"><br/><br/>
<button>Submit</button></div>
</form>

</body>
</html>