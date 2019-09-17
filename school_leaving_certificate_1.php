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
<div align="left"><a href="school_leaving_certificate.php"><img src="graphics/back.png" width="90" height="75" /></a><a href="http://localhost/School/menu.html"><img src="graphics/Home-icon.png" width="67" height="64" /></a></div>
<div align="center" id="new_admission"><img src="graphics/thunderbird_logo-only_RGB.png" width="575" height="118""; /><h1 id="fee"><em>School Leaving Form</em></h1></div>
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
  
    <td>Full Name: <?php
$result1 = mysqli_query($con,"SELECT * FROM new_admission");
while($row1 = mysqli_fetch_array($result1)){ 
if($row1['class']==$class){
	if($row1['roll_no']==$roll){
		
		echo $row1['s_name'];}}}
		
?> </td>
<td>Reg No. <?php
$result1 = mysqli_query($con,"SELECT * FROM new_admission");
while($row1 = mysqli_fetch_array($result1)){ 
if($row1['class']==$class){
	if($row1['roll_no']==$roll){
		
		echo $row1['reg_no'];}}}
		
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
    <td height="56" contenteditable='false'>Class: <?php
$result1 = mysqli_query($con,"SELECT * FROM new_admission");
while($row1 = mysqli_fetch_array($result1)){ 
if($row1['class']==$class){
	if($row1['roll_no']==$roll){
		
		echo $row1['class'];}}}
		
?>
      Roll No: <?php
$result1 = mysqli_query($con,"SELECT * FROM new_admission");
while($row1 = mysqli_fetch_array($result1)){ 
if($row1['class']==$class){
	if($row1['roll_no']==$roll){
		
		echo $row1['roll_no'];}}}
		
?></td>
    <td contenteditable='false' colspan="2">Does Student have any physical impairment?? if yes please mention:<br/> <input type="radio" name="gender" value="male"> Yes
<input type="radio" name="gender" value="female"> No</td>
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
<table width="76%">
  <tr>
  <th width="47%" contenteditable='false'>Reg No.</th>
    <th width="7%" contenteditable='false' >Date of leaving</th>
    <th width="47%" contenteditable='false'>Reason of leaving</th>
    
   
  </tr>
  <form method="post" action="school_leaving_certificate_2.php">
  <tr>
    <td width="10%" height="20" contenteditable='true' ><textarea id="reg" name="reg"></textarea></td>
    <td width="10%" height="20" contenteditable='true' ><textarea id="date_leaving" name="date_leaving"></textarea></td>
    <td width="44%" contenteditable='true'><textarea cols="76%" id="reason" name="reason"></textarea></td>
  </tr>

</table>
<br/>
<div align="center"><button>Submit</button><button>Print</button></div>
</form>
</body>
</html>