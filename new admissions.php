<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
<div align="left"><a href="menu.html"><img src="graphics/back.png" width="90" height="75" /></a><a href="http://localhost/School/menu.html"><img src="graphics/Home-icon.png" width="67" height="64" /></a></div>
<div id="printable">
<div align="center" id="new_admission"><img src="graphics/thunderbird_logo-only_RGB.png" width="575" height="118""; /><h2 id="fee"><em>ADMISSION FORM</em></h2></div>
<div align="center">
<form method="post" action="form.php"> 
<table width="155%" style="width:76%">
   <tr>
    <td colspan="3"><strong>Candidate Information</strong></td>
  </tr>
  <tr>
    <td contenteditable='false' colspan="2">Full Name: <input type="text" id="s_name" name="s_name" size="90%"></td>
    <td contenteditable='false'>Date: <input type="text" id="date" name="date" size="26%"></td>
  </tr>
  <tr>
    <td  contenteditable='false'>Date of Birth: <input type="text" id="date_of_birth" name="date_of_birth" size="52%"></td>
    <td contenteditable='false'>Place of Birth: <input type="text" id="b_place" size="24%"></td>
    <td contenteditable='false'>Sex:&nbsp;&nbsp;&nbsp;&nbsp; 
       <select name="sex">
  <option value="Male">Male</option>
  <option value="Female">Female</option>
</select></td>
  </tr>
<tr>
    <td height="23" contenteditable='false'>Residence tel:  <input type="text" id="res_no" name="res_no"  size="52%"></td>
    <td contenteditable='false'>CNIC/B-Form: <input type="text" id="cnic" name="cnic" size="23%"></td>
    <td contenteditable='false'>Religion: <input type="text" id="religion" size="23%"></td>
  </tr>
  <tr>
    <td height="56" contenteditable='false'>Class: <select name="class">
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
      Roll No: <input type="number" name="roll_no" min="1" max="50"></td>
    <td contenteditable='false' colspan="2">Does Student have any physical impairment?? if yes please mention:<br/> <input type="radio" name="gender" value="male"> Yes
<input type="radio" name="gender" value="female"> No</td>
  </tr>
</table>
<br/>
<table width="76%">
 <tr>
    <td colspan="6"><strong>Previous Academic Record</strong></td>
  </tr>
  <tr>
    <th width="7%" height=""  contenteditable='false'>Sr. #</th>
    <th width="35%" contenteditable='false'>Name of School</th>
    <th width="11%" contenteditable='false'>From:</th>
    <th width="11%"  contenteditable='false'>To</th>
    <th width="13%" contenteditable='false'>Up to class</th>
    <th width="35%" contenteditable='false'>Reason of leaving</th>
  </tr>
  <tr>
    <td width="7%" height="20"  contenteditable='false'><input type="text"></td>
    <td width="35%" contenteditable='false'><input type="text" size="23%"></td>
    <td width="11%" contenteditable='false'><input type="text"></td>
    <td width="11%"  contenteditable='false'><input type="text"></td>
    <td width="13%" contenteditable='false'><input type="text"></td>
    <td width="35%" contenteditable='false'><input type="text"></td>
  </tr>
     <tr>
    <td width="7%" height="20"  contenteditable='false'><input type="text"></td>
    <td width="7%" contenteditable='false'><input type="text" size="23%"></td>
    <td width="7%" contenteditable='false'><input type="text"></td>
    <td width="7%"  contenteditable='false'><input type="text"></td>
    <td width="7%" contenteditable='false'><input type="text"></td>
    <td width="7%" contenteditable='false'><input type="text"></td>
  </tr>
     <tr>
    <td width="7%" height="20"  contenteditable='false'><input type="text"></td>
    <td width="35%" contenteditable='false'><input type="text" size="23%"></td>
    <td width="11%" contenteditable='false'><input type="text"></td>
    <td width="11%"  contenteditable='false'><input type="text"></td>
    <td width="13%" contenteditable='false'><input type="text"></td>
    <td width="35%" contenteditable='false'><input type="text"></td>
  </tr>
</table>
<br/>
<table width="76%">
<tr>
    <td contenteditable='false' colspan="2"><strong>Parents / Guardian Information</strong></td>
  </tr>
  <tr>
    <td contenteditable='false' >Name: <input type="text" id="f_name" name="f_name" size="63%"></td>
    <td contenteditable='false'>CNIC: <input type="text" id="cnic" name="cnic" size="63%"></td>
  </tr>
  <tr>
    <td contenteditable='false' >Address:  <input type="text" id="address" name="address" size="61.9%"></td>
    <td contenteditable='false'>Occupation: <input type="text" id="f_occu" name="f_occu" size="58%"></td>
  </tr>
  <tr>
    <td contenteditable='false' >Office Tel. <input type="text" id="off_tel" name="off_tel" size="59%"></td>
    <td contenteditable='false'>Mobile: <input type="text" id="mobile" name="mobile" size="62%"></td>
  </tr>
</table>
<em><strong>Details of other childern studying at same campus</strong></em>
<table width="70%">
  <tr>
    <th width="7%" contenteditable='false' >Sr. #</th>
    <th width="47%" contenteditable='false'>Name</th>
     <th width="23%" contenteditable='false' >Student ID</th>
    <th width="23%" contenteditable='false'>Class</th>
  </tr>
  <tr>
    <td width="7%" height="20" contenteditable='true' ><input type="text"></td>
    <td width="47%" contenteditable='true'><input type="text" size="68%"></td>
     <td width="23%" contenteditable='true' ><input type="text" size="23%"></td>
    <td width="23%" contenteditable='true'><input type="text" size="23%"></td>
  </tr>
  <tr>
    <td width="7%" height="20" contenteditable='true' ><input type="text"></td>
    <td width="47%" contenteditable='true'><input type="text" size="68%"></td>
     <td width="23%" contenteditable='true' ><input type="text" size="23%"></td>
    <td width="23%" contenteditable='true'><input type="text" size="23%"></td>
  </tr><tr>
    <td width="7%" height="20" contenteditable='true' ><input type="text"></td>
    <td width="47%" contenteditable='true'><input type="text" size="68%"></td>
     <td width="23%" contenteditable='true' ><input type="text" size="23%"></td>
    <td width="23%" contenteditable='true'><input type="text" size="23%"></td>
  </tr><tr>
    <td width="7%" height="20" contenteditable='true' ><input type="text"></td>
    <td width="47%" contenteditable='true'><input type="text" size="68%"></td>
     <td width="23%" contenteditable='true' ><input type="text" size="23%"></td>
    <td width="23%" contenteditable='true'><input type="text" size="23%"></td>
  </tr>
</table>
<input type="checkbox">I undertake that I have read the prospectus thoroughly. No matter has concealed to me in this connection.I promise that I shall abide by all the<br/> rules and regulations and the decision of the principal.</div></div>
<div align="center"><button>Submit</button></div>
</form> 
<div align="center"><a href="javascript:window.print()"><button>Print</button></a></div>
</body>
</html>