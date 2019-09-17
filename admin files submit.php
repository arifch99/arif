<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Soft Innovation</title>
<script type="text/javascript" src="CCH.js"></script>
</head>
<link href="graphics.css" type="text/css" rel="stylesheet" media="screen" />

<body>
<div align="left"><a href="Admin files main.php"><img src="graphics/back.png" width="90" height="75" /></a><a href="http://localhost/School/menu.html"><img src="graphics/Home-icon.png" width="67" height="64" /></a></div>
<div align="center"><img src="graphics/logo.png" width="564" height="91" id="logo11"; /></div>
<?php
    ini_set('mysql.connect_timeout',300);
    ini_set('default_socket_timeout',300);
	$image= addslashes($_FILES['image']['tmp_name']);
                    $name= $_POST['name'];
                    $image= file_get_contents($image);
                    $image= base64_encode($image);
              
                $con=mysql_connect("localhost","root","");
                mysql_select_db("school",$con);
                $qry="insert into admin (name,image) values ('$name','$image')";
                $result=mysql_query($qry,$con);
                if($result)
                {
                    echo "<br/>Image uploaded.";
                }
                else
                {
                    echo "<br/>Image not uploaded.";
                }
            
          
        ?>
</body>
</html>