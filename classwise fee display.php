<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soft Innovation</title>
<script type="text/javascript" src="CCH.js"></script>
</head>
<link href="graphics.css" type="text/css" rel="stylesheet" media="screen" />

<body>
<div align="left"><a href="classwise fee.php"><img src="graphics/back.png" width="90" height="75" /></a><a href="http://localhost/School/menu.html"><img src="graphics/Home-icon.png" width="67" height="64" /></a></div>
<div align="center" id="logo"><img src="graphics/logo.png" name="logo1" width="544" height="92" id="logo1"; /></div>
<div align="center">
  <h1>Classwise Fee Record</h1></div>
  <table align="center" width="80%">
<?php
$con = mysqli_connect("localhost","root","","school"); 
if(!$con)
{
 die("could not connect:" .mysql_error()); 
}
 $class=$_POST['class'];
 $month=$_POST['month'];
  switch($month)
{
	case"1":{
echo "<b><tr><th>" .'Roll.'. "</th><th>" .'Name'. "</th><th>" .'January Fee'."</th></tr><br/></b>";
$result1 = mysqli_query($con,"SELECT * FROM jan ");
while($row1 = mysqli_fetch_array($result1)){

$result = mysqli_query($con,"SELECT * FROM new_admission ");
while($row = mysqli_fetch_array($result)){
	if($row1['class']==$row['class']){
		if($row1['class']==$class){
		if($row['roll_no']==$row1['roll_no']){
echo "<tr><td>".$row['roll_no']. 
  "</td><td> " .$row['s_name'].
"</td><td> " .$row1['fee']. 
"</td></tr>";

}}}}}}break;

case"2":{
echo "<b><tr><th>" .'Roll.'. "</th><th>" .'Name'. "</th><th>" .'January Fee'."</th></tr><br/></b>";
$result1 = mysqli_query($con,"SELECT * FROM feb ");
while($row1 = mysqli_fetch_array($result1)){

$result = mysqli_query($con,"SELECT * FROM new_admission ");
while($row = mysqli_fetch_array($result)){
	if($row1['class']==$row['class']){
		if($row1['class']==$class){
		if($row['roll_no']==$row1['roll_no']){
echo "<tr><td>".$row['roll_no']. 
  "</td><td> " .$row['s_name'].
"</td><td> " .$row1['fee']. 
"</td></tr>";

}}}}}}break;
case"3":{
echo "<b><tr><th>" .'Roll.'. "</th><th>" .'Name'. "</th><th>" .'January Fee'."</th></tr><br/></b>";
$result1 = mysqli_query($con,"SELECT * FROM march ");
while($row1 = mysqli_fetch_array($result1)){

$result = mysqli_query($con,"SELECT * FROM new_admission ");
while($row = mysqli_fetch_array($result)){
	if($row1['class']==$row['class']){
		if($row1['class']==$class){
		if($row['roll_no']==$row1['roll_no']){
echo "<tr><td>".$row['roll_no']. 
  "</td><td> " .$row['s_name'].
"</td><td> " .$row1['fee']. 
"</td></tr>";

}}}}}}break;
case"4":{
echo "<b><tr><th>" .'Roll.'. "</th><th>" .'Name'. "</th><th>" .'January Fee'."</th></tr><br/></b>";
$result1 = mysqli_query($con,"SELECT * FROM april ");
while($row1 = mysqli_fetch_array($result1)){

$result = mysqli_query($con,"SELECT * FROM new_admission ");
while($row = mysqli_fetch_array($result)){
	if($row1['class']==$row['class']){
		if($row1['class']==$class){
		if($row['roll_no']==$row1['roll_no']){
echo "<tr><td>".$row['roll_no']. 
  "</td><td> " .$row['s_name'].
"</td><td> " .$row1['fee']. 
"</td></tr>";

}}}}}}break;
case"5":{
echo "<b><tr><th>" .'Roll.'. "</th><th>" .'Name'. "</th><th>" .'January Fee'."</th></tr><br/></b>";
$result1 = mysqli_query($con,"SELECT * FROM may ");
while($row1 = mysqli_fetch_array($result1)){

$result = mysqli_query($con,"SELECT * FROM new_admission ");
while($row = mysqli_fetch_array($result)){
	if($row1['class']==$row['class']){
		if($row1['class']==$class){
		if($row['roll_no']==$row1['roll_no']){
echo "<tr><td>".$row['roll_no']. 
  "</td><td> " .$row['s_name'].
"</td><td> " .$row1['fee']. 
"</td></tr>";

}}}}}}break;
case"6":{
echo "<b><tr><th>" .'Roll.'. "</th><th>" .'Name'. "</th><th>" .'January Fee'."</th></tr><br/></b>";
$result1 = mysqli_query($con,"SELECT * FROM june ");
while($row1 = mysqli_fetch_array($result1)){

$result = mysqli_query($con,"SELECT * FROM new_admission ");
while($row = mysqli_fetch_array($result)){
	if($row1['class']==$row['class']){
		if($row1['class']==$class){
		if($row['roll_no']==$row1['roll_no']){
echo "<tr><td>".$row['roll_no']. 
  "</td><td> " .$row['s_name'].
"</td><td> " .$row1['fee']. 
"</td></tr>";

}}}}}}break;
case"7":{
echo "<b><tr><th>" .'Roll.'. "</th><th>" .'Name'. "</th><th>" .'January Fee'."</th></tr><br/></b>";
$result1 = mysqli_query($con,"SELECT * FROM july ");
while($row1 = mysqli_fetch_array($result1)){

$result = mysqli_query($con,"SELECT * FROM new_admission ");
while($row = mysqli_fetch_array($result)){
	if($row1['class']==$row['class']){
		if($row1['class']==$class){
		if($row['roll_no']==$row1['roll_no']){
echo "<tr><td>".$row['roll_no']. 
  "</td><td> " .$row['s_name'].
"</td><td> " .$row1['fee']. 
"</td></tr>";

}}}}}}break;
case"8":{
echo "<b><tr><th>" .'Roll.'. "</th><th>" .'Name'. "</th><th>" .'January Fee'."</th></tr><br/></b>";
$result1 = mysqli_query($con,"SELECT * FROM august ");
while($row1 = mysqli_fetch_array($result1)){

$result = mysqli_query($con,"SELECT * FROM new_admission ");
while($row = mysqli_fetch_array($result)){
	if($row1['class']==$row['class']){
		if($row1['class']==$class){
		if($row['roll_no']==$row1['roll_no']){
echo "<tr><td>".$row['roll_no']. 
  "</td><td> " .$row['s_name'].
"</td><td> " .$row1['fee']. 
"</td></tr>";

}}}}}}break;
case"9":{
echo "<b><tr><th>" .'Roll.'. "</th><th>" .'Name'. "</th><th>" .'January Fee'."</th></tr><br/></b>";
$result1 = mysqli_query($con,"SELECT * FROM sep ");
while($row1 = mysqli_fetch_array($result1)){

$result = mysqli_query($con,"SELECT * FROM new_admission ");
while($row = mysqli_fetch_array($result)){
	if($row1['class']==$row['class']){
		if($row1['class']==$class){
		if($row['roll_no']==$row1['roll_no']){
echo "<tr><td>".$row['roll_no']. 
  "</td><td> " .$row['s_name'].
"</td><td> " .$row1['fee']. 
"</td></tr>";

}}}}}}break;
case"10":{
echo "<b><tr><th>" .'Roll.'. "</th><th>" .'Name'. "</th><th>" .'January Fee'."</th></tr><br/></b>";
$result1 = mysqli_query($con,"SELECT * FROM oct ");
while($row1 = mysqli_fetch_array($result1)){

$result = mysqli_query($con,"SELECT * FROM new_admission ");
while($row = mysqli_fetch_array($result)){
	if($row1['class']==$row['class']){
		if($row1['class']==$class){
		if($row['roll_no']==$row1['roll_no']){
echo "<tr><td>".$row['roll_no']. 
  "</td><td> " .$row['s_name'].
"</td><td> " .$row1['fee']. 
"</td></tr>";

}}}}}}break;
case"11":{
echo "<b><tr><th>" .'Roll.'. "</th><th>" .'Name'. "</th><th>" .'January Fee'."</th></tr><br/></b>";
$result1 = mysqli_query($con,"SELECT * FROM nov ");
while($row1 = mysqli_fetch_array($result1)){

$result = mysqli_query($con,"SELECT * FROM new_admission ");
while($row = mysqli_fetch_array($result)){
	if($row1['class']==$row['class']){
		if($row1['class']==$class){
		if($row['roll_no']==$row1['roll_no']){
echo "<tr><td>".$row['roll_no']. 
  "</td><td> " .$row['s_name'].
"</td><td> " .$row1['fee']. 
"</td></tr>";

}}}}}}break;
case"12":{
echo "<b><tr><th>" .'Roll.'. "</th><th>" .'Name'. "</th><th>" .'January Fee'."</th></tr><br/></b>";
$result1 = mysqli_query($con,"SELECT * FROM december ");
while($row1 = mysqli_fetch_array($result1)){

$result = mysqli_query($con,"SELECT * FROM new_admission ");
while($row = mysqli_fetch_array($result)){
	if($row1['class']==$row['class']){
		if($row1['class']==$class){
		if($row['roll_no']==$row1['roll_no']){
echo "<tr><td>".$row['roll_no']. 
  "</td><td> " .$row['s_name'].
"</td><td> " .$row1['fee']. 
"</td></tr>";

}}}}}}break;
}
?>

</table>
</div>

</body>
</html>