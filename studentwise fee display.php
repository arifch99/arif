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
<div align="center">
  <h1>Fee Record</h1></div>
<?php

$con = mysqli_connect("localhost", "root", "","school"); 
if(!$con)
{
 die("could not connect:" .mysql_error()); 
}
$roll=$_POST['roll'];
$class=$_POST['class'];
$result = mysqli_query($con,"SELECT * FROM new_admission"); 
$result1 = mysqli_query($con,"SELECT * FROM jan");
$result2 = mysqli_query($con,"SELECT * FROM feb");
$result3 = mysqli_query($con,"SELECT * FROM march");
$result4 = mysqli_query($con,"SELECT * FROM april");
$result5 = mysqli_query($con,"SELECT * FROM may");
$result6 = mysqli_query($con,"SELECT * FROM june");
$result7 = mysqli_query($con,"SELECT * FROM july");
$result8 = mysqli_query($con,"SELECT * FROM august");
$result9 = mysqli_query($con,"SELECT * FROM sep");
$result10 = mysqli_query($con,"SELECT * FROM oct");
$result11 = mysqli_query($con,"SELECT * FROM nov");
$result12 = mysqli_query($con,"SELECT * FROM december"); 
?>
<table align="center" width="80%" >
<?php
echo "<b><tr><th>" .'Student Name'. "</th><th>".'Father Name'."</th><th>" .'Class'."</th><th>" .'Roll No.'."</th></tr><br/></b>";

while($row = mysqli_fetch_array($result)){ 
if($row['class']==$class){
	if($row['roll_no']==$roll){
		echo "<tr><td>".$row['s_name']. 
  "</td><td> " .$row['f_name']. 
"</td><td> " .$row['class'].
"</td><td> " .$row['roll_no'].
"</td></tr>";
?>
</table>
<table align="center" width="80%" id="fee_table">
<?php
echo "<b><tr><th>" .'January'. "</th><th>".'Deposit Date'."</th></tr><br/></b>";
while($row1 = mysqli_fetch_array($result1))
    if($row1['class']==$class){
   if($row1['roll_no']==$roll){ 
echo "<tr><td>".$row1['fee'].  
"</td><td> " .$row1['date']. 
"</td></tr>";}}

echo "<b><tr><th>" .'February'. "</th><th>".'Deposit Date'."</th></tr><br/></b>";
while($row2 = mysqli_fetch_array($result2))
    if($row2['class']==$class){
   if($row2['roll_no']==$roll){ 
echo "<tr><td>".$row2['fee'].  
"</td><td> " .$row2['date']. 
"</td></tr>";}}

echo "<b><tr><th>" .'March'. "</th><th>".'Deposit Date'."</th></tr><br/></b>";
while($row3 = mysqli_fetch_array($result3))
    if($row3['class']==$class){
   if($row3['roll_no']==$roll){ 
echo "<tr><td>".$row3['fee'].  
"</td><td> " .$row3['date']. 
"</td></tr>";}}

echo "<b><tr><th>" .'April'. "</th><th>".'Deposit Date'."</th></tr><br/></b>";
while($row4 = mysqli_fetch_array($result4))
    if($row4['class']==$class){
   if($row4['roll_no']==$roll){ 
echo "<tr><td>".$row4['fee'].  
"</td><td> " .$row4['date']. 
"</td></tr>";}}

echo "<b><tr><th>" .'May'. "</th><th>".'Deposit Date'."</th></tr><br/></b>";
while($row5 = mysqli_fetch_array($result5))
    if($row5['class']==$class){
   if($row5['roll_no']==$roll){ 
echo "<tr><td>".$row5['fee'].  
"</td><td> " .$row5['date']. 
"</td></tr>";}}

echo "<b><tr><th>" .'June'. "</th><th>".'Deposit Date'."</th></tr><br/></b>";
while($row6 = mysqli_fetch_array($result6))
    if($row6['class']==$class){
   if($row6['roll_no']==$roll){ 
echo "<tr><td>".$row6['fee'].  
"</td><td> " .$row6['date']. 
"</td></tr>";}}

echo "<b><tr><th>" .'July'. "</th><th>".'Deposit Date'."</th></tr><br/></b>";
while($row7 = mysqli_fetch_array($result7))
    if($row7['class']==$class){
   if($row7['roll_no']==$roll){ 
echo "<tr><td>".$row7['fee'].  
"</td><td> " .$row7['date']. 
"</td></tr>";}}

echo "<b><tr><th>" .'August'. "</th><th>".'Deposit Date'."</th></tr><br/></b>";
while($row8 = mysqli_fetch_array($result8))
    if($row8['class']==$class){
   if($row8['roll_no']==$roll){ 
echo "<tr><td>".$row8['fee'].  
"</td><td> " .$row8['date']. 
"</td></tr>";}}

echo "<b><tr><th>" .'September'. "</th><th>".'Deposit Date'."</th></tr><br/></b>";
while($row9 = mysqli_fetch_array($result9))
    if($row9['class']==$class){
   if($row9['roll_no']==$roll){ 
echo "<tr><td>".$row9['fee'].  
"</td><td> " .$row9['date']. 
"</td></tr>";}}

echo "<b><tr><th>" .'October'. "</th><th>".'Deposit Date'."</th></tr><br/></b>";
while($row10 = mysqli_fetch_array($result10))
    if($row10['class']==$class){
   if($row10['roll_no']==$roll){ 
echo "<tr><td>".$row10['fee'].  
"</td><td> " .$row10['date']. 
"</td></tr>";}}

echo "<b><tr><th>" .'November'. "</th><th>".'Deposit Date'."</th></tr><br/></b>";
while($row11 = mysqli_fetch_array($result11))
    if($row11['class']==$class){
   if($row11['roll_no']==$roll){ 
echo "<tr><td>".$row11['fee'].  
"</td><td> " .$row11['date']. 
"</td></tr>";}}

echo "<b><tr><th>" .'December'. "</th><th>".'Deposit Date'."</th></tr><br/></b>";
while($row12 = mysqli_fetch_array($result12))
    if($row12['class']==$class){
   if($row12['roll_no']==$roll){ 
echo "<tr><td>".$row12['fee'].  
"</td><td> " .$row12['date']. 
"</td></tr>";}}
}}}
?>
</table>

</div>

</body>
</html>