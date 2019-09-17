<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soft Innovation</title>
<script type="text/javascript" src="CCH.js"></script>
</head>
<link href="graphics.css" type="text/css" rel="stylesheet" media="screen" />

<body>
<div align="left"><a href="individual teacher pay.php"><img src="graphics/back.png" width="90" height="75" /></a><a href="http://localhost/School/menu.html"><img src="graphics/Home-icon.png" width="67" height="64" /></a></div>
<div align="center" ><img src="graphics/logo.png" name="logo1" width="544" height="92" id="logo1"; /></div>

<div align="center" id="heading">
  <h1>Complete Pay Record</h1>
</div>
<br/>
<?php
$con = mysqli_connect("localhost","root","","school"); 
if(!$con)
{
 die("could not connect:" .mysql_error()); 
}
$id=$_POST['id'];
$name=$_POST['name'];	
$Jan= 'January';
$feb= 'February';
$march= 'March';
$april= 'April';
$may= 'May';
$jun= 'June';
$july= 'July';
$august= 'August';
$sep= 'September';
$oct= 'October';
$nov= 'November';
$dec= 'December';
?>
<div align="center" id="pay_name">
<?php
echo 'Sir ';
echo $name;
echo "'s Pay Record ";
?>
</div>
<table align="center" width="50%">
<?php

$result = mysqli_query($con,"SELECT * FROM teacher_1");
while($row = mysqli_fetch_array($result))
  {
		  if($row['Sr_no']==$id && $row['name']==$name){

		
echo "<b><tr><th>" .'Month'."</th><th>" .'Pay'."</th><th>" .' Date of pay recieved '."</th></tr><br/></b>";
echo "<tr><td> ". $Jan .
 "</td><td> " .$row['pay']. 
  "</td><td> " .$row['date']. 
"</td></tr>";

}}
?>
<?php

$result = mysqli_query($con,"SELECT * FROM teacher_2");
while($row = mysqli_fetch_array($result))
  {
		  if($row['Sr_no']==$id && $row['name']==$name){

echo "<tr><td> ". $feb .
 "</td><td> " .$row['pay']. 
  "</td><td> " .$row['date']. 
"</td></tr>";

}}
?>
<?php

$result = mysqli_query($con,"SELECT * FROM teacher_3");
while($row = mysqli_fetch_array($result))
  {
		  if($row['Sr_no']==$id && $row['name']==$name){

echo "<tr><td> ". $march .
 "</td><td> " .$row['pay']. 
  "</td><td> " .$row['date']. 
"</td></tr>";

}}
?>
<?php

$result = mysqli_query($con,"SELECT * FROM teacher_4");
while($row = mysqli_fetch_array($result))
  {
		  if($row['Sr_no']==$id && $row['name']==$name){

echo "<tr><td> ". $april .
 "</td><td> " .$row['pay']. 
  "</td><td> " .$row['date']. 
"</td></tr>";

}}
?>
<?php

$result = mysqli_query($con,"SELECT * FROM teacher_5");
while($row = mysqli_fetch_array($result))
  {
		  if($row['Sr_no']==$id && $row['name']==$name){

echo "<tr><td> ". $may .
 "</td><td> " .$row['pay']. 
  "</td><td> " .$row['date']. 
"</td></tr>";

}}
?>
<?php

$result = mysqli_query($con,"SELECT * FROM teacher_6");
while($row = mysqli_fetch_array($result))
  {
		  if($row['Sr_no']==$id && $row['name']==$name){

echo "<tr><td> ". $jun .
 "</td><td> " .$row['pay']. 
  "</td><td> " .$row['date']. 
"</td></tr>";

}}
?>
<?php

$result = mysqli_query($con,"SELECT * FROM teacher_7");
while($row = mysqli_fetch_array($result))
  {
		  if($row['Sr_no']==$id && $row['name']==$name){

echo "<tr><td> ". $july .
 "</td><td> " .$row['pay']. 
  "</td><td> " .$row['date']. 
"</td></tr>";

}}
?>
<?php

$result = mysqli_query($con,"SELECT * FROM teacher_8");
while($row = mysqli_fetch_array($result))
  {
		  if($row['Sr_no']==$id && $row['name']==$name){

echo "<tr><td> ". $august .
 "</td><td> " .$row['pay']. 
  "</td><td> " .$row['date']. 
"</td></tr>";

}}
?>
<?php

$result = mysqli_query($con,"SELECT * FROM teacher_9");
while($row = mysqli_fetch_array($result))
  {
		  if($row['Sr_no']==$id && $row['name']==$name){

echo "<tr><td> ". $sep .
 "</td><td> " .$row['pay']. 
  "</td><td> " .$row['date']. 
"</td></tr>";

}}
?>
<?php

$result = mysqli_query($con,"SELECT * FROM teacher_10");
while($row = mysqli_fetch_array($result))
  {
		  if($row['Sr_no']==$id && $row['name']==$name){

echo "<tr><td> ". $oct .
 "</td><td> " .$row['pay']. 
  "</td><td> " .$row['date']. 
"</td></tr>";

}}
?>
<?php

$result = mysqli_query($con,"SELECT * FROM teacher_11");
while($row = mysqli_fetch_array($result))
  {
		  if($row['Sr_no']==$id && $row['name']==$name){

echo "<tr><td> ". $nov .
 "</td><td> " .$row['pay']. 
  "</td><td> " .$row['date']. 
"</td></tr>";

}}
?>
<?php

$result = mysqli_query($con,"SELECT * FROM teacher_12");
while($row = mysqli_fetch_array($result))
  {
		  if($row['Sr_no']==$id && $row['name']==$name){

echo "<tr><td> ". $dec .
 "</td><td> " .$row['pay']. 
  "</td><td> " .$row['date']. 
"</td></tr>";

}}
?>
</table>
<br/>
<div align="center">
  <button>Print Pay Record</button></div>
</body>
</html>
