<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soft Innovation</title>
<script type="text/javascript" src="CCH.js"></script>
</head>
<link href="graphics.css" type="text/css" rel="stylesheet" media="screen" />

<body>
<div align="left"><a href="studentwise fee.php"><img src="graphics/back.png" width="90" height="75" /></a><a href="http://localhost/School/menu.html"><img src="graphics/Home-icon.png" width="67" height="64" /></a></div>
<div align="center"><img src="graphics/logo.png" name="logo1" width="544" height="92" id="logo1"; /></div>

<div align="center" id="heading">
  <h1>Complete Fee Record</h1>
</div>
<br/>
<?php
$con = mysqli_connect("localhost","root","","school"); 
if(!$con)
{
 die("could not connect:" .mysql_error()); 
}
$class=$_POST['class'];
$roll=$_POST['roll'];	
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
$result1 = mysqli_query($con,"SELECT * FROM new_admission");
while($row1 = mysqli_fetch_array($result1)){ 
if($row1['class']==$class){
	if($row1['roll_no']==$roll){
		
		echo 'Name: ';
		echo $row1['s_name'];
		
?>
<br/>
<?php
        echo ' Father Name: ';
		echo $row1['f_name'];
      
?>
<br/>
<?php
          echo 'Roll No. ';
		echo $row1['roll_no'];	
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
		echo 'Class: ';
		echo $row1['class'];			
		}}}
?>
</div>
<table align="center" width="50%">
<?php

$result = mysqli_query($con,"SELECT * FROM jan");
while($row = mysqli_fetch_array($result))
  {
		  if($row['class']==$class){
	if($row['roll_no']==$roll){

		
echo "<b><tr><th>" .'Month'."</th><th>" .'Fee'."</th><th>" .' Date of Fee Deposited '."</th></tr><br/></b>";
echo "<tr><td> ". $Jan .
 "</td><td> " .$row['fee']. 
  "</td><td> " .$row['date']. 
"</td></tr>";

}}}
?>
<?php

$result = mysqli_query($con,"SELECT * FROM feb");
while($row = mysqli_fetch_array($result))
  {
		  if($row['class']==$class){
	if($row['roll_no']==$roll){

echo "<tr><td> ". $feb .
 "</td><td> " .$row['fee']. 
  "</td><td> " .$row['date']. 
"</td></tr>";

}}}
?>
<?php

$result = mysqli_query($con,"SELECT * FROM march");
while($row = mysqli_fetch_array($result))
  {
		  if($row['class']==$class){
	if($row['roll_no']==$roll){

echo "<tr><td> ". $march .
 "</td><td> " .$row['fee']. 
  "</td><td> " .$row['date']. 
"</td></tr>";

}}}
?>
<?php

$result = mysqli_query($con,"SELECT * FROM april");
while($row = mysqli_fetch_array($result))
  {
		  if($row['class']==$class){
	if($row['roll_no']==$roll){

echo "<tr><td> ". $april .
 "</td><td> " .$row['fee']. 
  "</td><td> " .$row['date']. 
"</td></tr>";

}}}
?>
<?php

$result = mysqli_query($con,"SELECT * FROM may");
while($row = mysqli_fetch_array($result))
  {
		  if($row['class']==$class){
	if($row['roll_no']==$roll){

echo "<tr><td> ". $may .
 "</td><td> " .$row['fee']. 
  "</td><td> " .$row['date']. 
"</td></tr>";

}}}
?>
<?php

$result = mysqli_query($con,"SELECT * FROM june");
while($row = mysqli_fetch_array($result))
  {
		  if($row['class']==$class){
	if($row['roll_no']==$roll){

echo "<tr><td> ". $jun .
 "</td><td> " .$row['fee']. 
  "</td><td> " .$row['date']. 
"</td></tr>";

}}}
?>
<?php

$result = mysqli_query($con,"SELECT * FROM july");
while($row = mysqli_fetch_array($result))
  {
		  if($row['class']==$class){
	if($row['roll_no']==$roll){

echo "<tr><td> ". $july .
 "</td><td> " .$row['fee']. 
  "</td><td> " .$row['date']. 
"</td></tr>";

}}}
?>
<?php

$result = mysqli_query($con,"SELECT * FROM august");
while($row = mysqli_fetch_array($result))
  {
		  if($row['class']==$class){
	if($row['roll_no']==$roll){

echo "<tr><td> ". $august .
 "</td><td> " .$row['fee']. 
  "</td><td> " .$row['date']. 
"</td></tr>";

}}}
?>
<?php

$result = mysqli_query($con,"SELECT * FROM sep");
while($row = mysqli_fetch_array($result))
  {
		  if($row['class']==$class){
	if($row['roll_no']==$roll){

echo "<tr><td> ". $sep .
 "</td><td> " .$row['fee']. 
  "</td><td> " .$row['date']. 
"</td></tr>";

}}}
?>
<?php

$result = mysqli_query($con,"SELECT * FROM oct");
while($row = mysqli_fetch_array($result))
  {
		  if($row['class']==$class){
	if($row['roll_no']==$roll){

echo "<tr><td> ". $oct .
 "</td><td> " .$row['fee']. 
  "</td><td> " .$row['date']. 
"</td></tr>";

}}}
?>
<?php

$result = mysqli_query($con,"SELECT * FROM nov");
while($row = mysqli_fetch_array($result))
  {
		  if($row['class']==$class){
	if($row['roll_no']==$roll){

echo "<tr><td> ". $nov .
 "</td><td> " .$row['fee']. 
  "</td><td> " .$row['date']. 
"</td></tr>";

}}}
?>
<?php

$result = mysqli_query($con,"SELECT * FROM december");
while($row = mysqli_fetch_array($result))
  {
		  if($row['class']==$class){
	if($row['roll_no']==$roll){

echo "<tr><td> ". $dec .
 "</td><td> " .$row['fee']. 
  "</td><td> " .$row['date']. 
"</td></tr>";

}}}
?>
</table>
<br/>
<div align="center">
  <button>Print Fee Record</button></div>
</body>
</html>
