<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soft Innovation</title>
<script type="text/javascript" src="CCH.js"></script>
</head>
<style type="text/css"> 
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
<link href="graphics.css" type="text/css" rel="stylesheet" media="screen" />
<body>
<div align="left"><a href="search_student (1).php"><img src="graphics/back.png" width="90" height="75" /></a><a href="http://localhost/School/menu.html"><img src="graphics/Home-icon.png" width="67" height="64" /></a></div>
<div align="center" id="new_admission"><img src="graphics/thunderbird_logo-only_RGB.png" width="575" height="118""; />
<h1 id="fee"><em>School Complete Record</em></h1></div>
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
<div align="center">
 
<table width="155%" style="width:76%">
   <tr>
    <td colspan="3"><strong>Candidate Information</strong></td>
  </tr>
  <tr>
  
    <td colspan="2">Full Name: <?php
$result1 = mysqli_query($con,"SELECT * FROM new_admission");
while($row1 = mysqli_fetch_array($result1)){ 
if($row1['class']==$class){
	if($row1['roll_no']==$roll){
		
		echo $row1['s_name'];}}}
		
?> </td>

    <td contenteditable='false'>Date of admission: <?php
$result1 = mysqli_query($con,"SELECT * FROM new_admission");
while($row1 = mysqli_fetch_array($result1)){ 
if($row1['class']==$class){
	if($row1['roll_no']==$roll){
		
		echo $row1['date'];}}}
		
?></td>
  </tr>
  <tr>
    <td  contenteditable='false'>Date of Birth: <?php
$result1 = mysqli_query($con,"SELECT * FROM new_admission");
while($row1 = mysqli_fetch_array($result1)){ 
if($row1['class']==$class){
	if($row1['roll_no']==$roll){
		
		echo $row1['date_birth'];}}}
		
?></td>
    <td contenteditable='false'>CNIC/B-Form: <?php
$result1 = mysqli_query($con,"SELECT * FROM new_admission");
while($row1 = mysqli_fetch_array($result1)){ 
if($row1['class']==$class){
	if($row1['roll_no']==$roll){
		
		echo $row1['cnic'];}}}
		
?></td>
    <td contenteditable='false'>Sex:&nbsp;&nbsp;&nbsp;&nbsp; 
       <?php
$result1 = mysqli_query($con,"SELECT * FROM new_admission");
while($row1 = mysqli_fetch_array($result1)){ 
if($row1['class']==$class){
	if($row1['roll_no']==$roll){
		
		echo $row1['sex'];}}}
		
?></td>
  </tr>
 <tr>
  
    <td>Reg No. <?php
$result1 = mysqli_query($con,"SELECT * FROM new_admission");
while($row1 = mysqli_fetch_array($result1)){ 
if($row1['class']==$class){
	if($row1['roll_no']==$roll){
		
		echo $row1['reg_no'];}}}
		
?> </td>
<td>Class: <?php
$result1 = mysqli_query($con,"SELECT * FROM new_admission");
while($row1 = mysqli_fetch_array($result1)){ 
if($row1['class']==$class){
	if($row1['roll_no']==$roll){
		
		echo $row1['class'];}}}
		
?> </td>
    <td contenteditable='false'>Roll No.      <?php
$result1 = mysqli_query($con,"SELECT * FROM new_admission");
while($row1 = mysqli_fetch_array($result1)){ 
if($row1['class']==$class){
	if($row1['roll_no']==$roll){
		
		echo $row1['roll_no'];}}}
		
?></td>
  </tr>
</table>
<br/>
<table width="76%">
<tr>
    <td contenteditable='false' colspan="2"><strong>Parents / Guardian Information</strong></td>
  </tr>
  <tr>
    <td contenteditable='false' >Name: <?php
$result1 = mysqli_query($con,"SELECT * FROM new_admission");
while($row1 = mysqli_fetch_array($result1)){ 
if($row1['class']==$class){
	if($row1['roll_no']==$roll){
		
		echo $row1['f_name'];}}}
		
?></td>
    <td contenteditable='false'>Occupation:   <?php
$result1 = mysqli_query($con,"SELECT * FROM new_admission");
while($row1 = mysqli_fetch_array($result1)){ 
if($row1['class']==$class){
	if($row1['roll_no']==$roll){
		
		echo $row1['f_occupation'];}}}
		
?></td>
  </tr>
  <tr>
    <td contenteditable='false' >Address:  <?php
$result1 = mysqli_query($con,"SELECT * FROM new_admission");
while($row1 = mysqli_fetch_array($result1)){ 
if($row1['class']==$class){
	if($row1['roll_no']==$roll){
		
		echo $row1['address'];}}}
		
?></td>
    <td contenteditable='false'>Mobile: 
      <?php
$result1 = mysqli_query($con,"SELECT * FROM new_admission");
while($row1 = mysqli_fetch_array($result1)){ 
if($row1['class']==$class){
	if($row1['roll_no']==$roll){
		
		echo $row1['mobile'];}}}
		
?></td>
  </tr>

</table>
<br/>

<br/>
<div align="center"><button>Print</button></div>

</body>
</html>