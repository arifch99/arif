<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soft Innovation</title>
<script type="text/javascript" src="CCH.js"></script>
</head>
 <style type="text/css">
@media print {
body * {
visibility:hidden;
}
#printable, #printable * {
visibility:visible;
}
#printable { /* aligning the printable area */
position:absolute;
top:0%;
}
}
</style>
<link href="graphics.css" type="text/css" rel="stylesheet" media="screen" />

<body>
<div align="left"><a href="print result card.php"><img src="graphics/back.png" width="90" height="75" /></a><a href="http://localhost/School/menu.html"><img src="graphics/Home-icon.png" width="67" height="64" /></a></div>
<div id="printable">
<div align="center" id="logo"><img src="graphics/logo.png" name="logo1" width="544" height="92" id="logo2"; /></div>

<div align="center" id="heading">
  <h1>Complete Result Card</h1>
</div>

<?php
$con = mysqli_connect("localhost","root","","school"); 
if(!$con)
{
 die("could not connect:" .mysql_error()); 
}
	
?>
<table align="center" width="80%">
<?php

$roll=$_POST['roll'];
$class=$_POST['class'];


$result = mysqli_query($con,"SELECT * FROM new_admission ");
while($row = mysqli_fetch_array($result))
  {
		  if($row['class']==$class && $row['roll_no']==$roll){
	
		  
echo "<b><tr><th>" .'Roll.'. "</th><th>" .'Name'. "</th><th>" .'Father Name'."</th><th>" .' Class '."</th><th>" .' Date of Birth '."</th><th>" .'ID Card No.'."</th><th>" .'Addess'."</th></tr><br/></b>";
		
echo "<tr><td>".$row['roll_no']. 
  "</td><td> " .$row['s_name'].
  "</td><td> " .$row['f_name'].
  "</td><td> " .$row['class'].
  "</td><td> " .$row['date_birth'].
  "</td><td> " .$row['cnic'].
  "</td><td> " .$row['address']. 
"</td></tr>";

}}
?>
<table align="center" width="80%">

<?php

$roll=$_POST['roll'];
$class=$_POST['class'];

if($class=='Nursery'){
$result1 = mysqli_query($con,"SELECT * FROM 1_nur ");}
if($class=='Kg-1'){
$result1 = mysqli_query($con,"SELECT * FROM 1_kg1 ");}
if($class=='Kg-2'){
$result1 = mysqli_query($con,"SELECT * FROM 1_kg2 ");}
if($class==1){
$result1 = mysqli_query($con,"SELECT * FROM 1_1 ");}
if($class==2){
$result1 = mysqli_query($con,"SELECT * FROM 1_2 ");}
if($class==3){
$result1 = mysqli_query($con,"SELECT * FROM 1_3 ");}
if($class==4){
$result1 = mysqli_query($con,"SELECT * FROM 1_4 ");}
if($class==5){
$result1 = mysqli_query($con,"SELECT * FROM 1_5 ");}
if($class==6){
$result1 = mysqli_query($con,"SELECT * FROM 1_6 ");}
if($class==7){
$result1 = mysqli_query($con,"SELECT * FROM 1_7 ");}
if($class==8){
$result1 = mysqli_query($con,"SELECT * FROM 1_8 ");}
if($class==9){
$result1 = mysqli_query($con,"SELECT * FROM 1_9 ");}
if($class==10){
$result1 = mysqli_query($con,"SELECT * FROM 1_10 ");}
if($class==11){
$result1 = mysqli_query($con,"SELECT * FROM 1_11 ");}
if($class==12){
$result1 = mysqli_query($con,"SELECT * FROM 1_12 ");}

while($row1 = mysqli_fetch_array($result1)){

$result = mysqli_query($con,"SELECT * FROM new_admission ");
while($row = mysqli_fetch_array($result))
  {
	  if($row1['roll_no']==$row['roll_no']){
		  if($row['class']==$class && $row['roll_no']==$roll){
	
		  
echo "<b><tr><th>" .'English'."</th><th>" .' Urdu '."</th><th>" .'Islamic St.'."</th><th>" .'Pak St.'."</th><th>" .' Math '."</th><th>" .'Physics'."</th><th>" .'Biology'."</th><th>" .'Chemistry'."</th><th>" .'Computer'."</th><th>" .'Obtained Marks'."</th><th>" .'Total Marks'."</th></tr><br/></b>";
		
echo 
  "</td><td> " .$row1['English'].
  "</td><td> " .$row1['Urdu'].
  "</td><td> " .$row1['Islamic'].
  "</td><td> " .$row1['Pak Studies'].
  "</td><td> " .$row1['math'].
  "</td><td> " .$row1['Physics'].
  "</td><td> " .$row1['Bio'].
  "</td><td> " .$row1['Chemistry'].
  "</td><td> " .$row1['computer']. 
"</td><td> " .$row1['obtained'].
"</td><td> " .$row1['total']. 
"</td></tr>";

}}}}
?>
<div align="center">
  <h2><em>1st Term Result</em></h2></div>
<table align="center" width="80%">

<?php
if($class=='Nursery'){
$result1 = mysqli_query($con,"SELECT * FROM 2_nur ");}
if($class=='Kg-1'){
$result1 = mysqli_query($con,"SELECT * FROM 2_kg1 ");}
if($class=='Kg-2'){
$result1 = mysqli_query($con,"SELECT * FROM 2_kg2 ");}
if($class==1){
$result1 = mysqli_query($con,"SELECT * FROM 2_1 ");}
if($class==2){
$result1 = mysqli_query($con,"SELECT * FROM 2_2 ");}
if($class==3){
$result1 = mysqli_query($con,"SELECT * FROM 2_3 ");}
if($class==4){
$result1 = mysqli_query($con,"SELECT * FROM 2_4 ");}
if($class==5){
$result1 = mysqli_query($con,"SELECT * FROM 2_5 ");}
if($class==6){
$result1 = mysqli_query($con,"SELECT * FROM 2_6 ");}
if($class==7){
$result1 = mysqli_query($con,"SELECT * FROM 2_7 ");}
if($class==8){
$result1 = mysqli_query($con,"SELECT * FROM 2_8 ");}
if($class==9){
$result1 = mysqli_query($con,"SELECT * FROM 2_9 ");}
if($class==10){
$result1 = mysqli_query($con,"SELECT * FROM 2_10 ");}
if($class==11){
$result1 = mysqli_query($con,"SELECT * FROM 2_11 ");}
if($class==12){
$result1 = mysqli_query($con,"SELECT * FROM 2_12 ");}
while($row1 = mysqli_fetch_array($result1)){

$result = mysqli_query($con,"SELECT * FROM new_admission ");
while($row = mysqli_fetch_array($result))
  {
	  if($row1['roll_no']==$row['roll_no']){
		  if($row['class']==$class && $row['roll_no']==$roll){
	  
echo "<b><tr><th>" .'English'."</th><th>" .' Urdu '."</th><th>" .'Islamic St.'."</th><th>" .'Pak St.'."</th><th>" .' Math '."</th><th>" .'Physics'."</th><th>" .'Biology'."</th><th>" .'Chemistry'."</th><th>" .'Computer'."</th><th>" .'Obtained Marks'."</th><th>" .'Total Marks'."</th></tr><br/></b>";
		
echo 
  "</td><td> " .$row1['English'].
  "</td><td> " .$row1['Urdu'].
  "</td><td> " .$row1['Islamic'].
  "</td><td> " .$row1['Pak Studies'].
  "</td><td> " .$row1['math'].
  "</td><td> " .$row1['Physics'].
  "</td><td> " .$row1['Bio'].
  "</td><td> " .$row1['Chemistry'].
  "</td><td> " .$row1['computer']. 
"</td><td> " .$row1['obtained'].
"</td><td> " .$row1['total']. 
"</td></tr>";

}}}}
?>
<div align="center">
  <h2><em>2nd Term Result</em></h2></div>
<table align="center" width="80%">

<?php
if($class=='Nursery'){
$result1 = mysqli_query($con,"SELECT * FROM 3_nur ");}
if($class=='Kg-1'){
$result1 = mysqli_query($con,"SELECT * FROM 3_kg1 ");}
if($class=='Kg-2'){
$result1 = mysqli_query($con,"SELECT * FROM 3_kg2 ");}
if($class==1){
$result1 = mysqli_query($con,"SELECT * FROM 3_1 ");}
if($class==2){
$result1 = mysqli_query($con,"SELECT * FROM 3_2 ");}
if($class==3){
$result1 = mysqli_query($con,"SELECT * FROM 3_3 ");}
if($class==4){
$result1 = mysqli_query($con,"SELECT * FROM 3_4 ");}
if($class==5){
$result1 = mysqli_query($con,"SELECT * FROM 3_5 ");}
if($class==6){
$result1 = mysqli_query($con,"SELECT * FROM 3_6 ");}
if($class==7){
$result1 = mysqli_query($con,"SELECT * FROM 3_7 ");}
if($class==8){
$result1 = mysqli_query($con,"SELECT * FROM 3_8 ");}
if($class==9){
$result1 = mysqli_query($con,"SELECT * FROM 3_9 ");}
if($class==10){
$result1 = mysqli_query($con,"SELECT * FROM 3_10 ");}
if($class==11){
$result1 = mysqli_query($con,"SELECT * FROM 3_11 ");}
if($class==12){
$result1 = mysqli_query($con,"SELECT * FROM 3_12 ");}
while($row1 = mysqli_fetch_array($result1)){

$result = mysqli_query($con,"SELECT * FROM new_admission ");
while($row = mysqli_fetch_array($result))
  {
	  if($row1['roll_no']==$row['roll_no']){
		  if($row['class']==$class && $row['roll_no']==$roll){
	  
echo "<b><tr><th>" .'English'."</th><th>" .' Urdu '."</th><th>" .'Islamic St.'."</th><th>" .'Pak St.'."</th><th>" .' Math '."</th><th>" .'Physics'."</th><th>" .'Biology'."</th><th>" .'Chemistry'."</th><th>" .'Computer'."</th><th>" .'Obtained Marks'."</th><th>" .'Total Marks'."</th></tr><br/></b>";
		
echo 
  "</td><td> " .$row1['English'].
  "</td><td> " .$row1['Urdu'].
  "</td><td> " .$row1['Islamic'].
  "</td><td> " .$row1['Pak Studies'].
  "</td><td> " .$row1['math'].
  "</td><td> " .$row1['Physics'].
  "</td><td> " .$row1['Bio'].
  "</td><td> " .$row1['Chemistry'].
  "</td><td> " .$row1['computer']. 
"</td><td> " .$row1['obtained'].
"</td><td> " .$row1['total']. 
"</td></tr>";

}}}}
?></div>
<div align="center">
  <h2><em>Final Term Result</em></h2></div>
</table></div>
<br/>
<div align="center"><a href="javascript:window.print()"><button>Print Result Card</button></a></div>
</body>
</html>
