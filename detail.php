
<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	<title>
		Detail
	</title>
	<link rel="stylesheet" type="text/css" href="css/total.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body bgcolor="#E0EEEE">
	<div class="title" style=" text-align: center;word-spacing: 25px;">
    <a class="link" href="add.php">Add</a>
    <a class="link" href="list.php">List</a>
    <a class="link" href="login.php">Login</a>
  </div>
	<label style="font-size: 25px; font-family:微软雅黑; text-align: center;float: center; ">Paper Detail</label>
	<div id="login_frame">
 <?php
 header('Content-Type: text/html; charset=utf8');
include 'conn.php'; 
$paper_number=$_GET[paper_number]; 
$query="SELECT
  paper.paper_number,
	paper.title,
	paper_type,
	NAME,
	email,
	paper.paper_abstract
FROM
	paper,author,
	person
WHERE
	paper.paper_number = author.paper_number
AND author.is_contact = 'y'
AND author.person_id = person.person_id
AND paper.paper_number=".$paper_number; 
$result=mysql_query($query); 
while ($rs=mysql_fetch_array($result)){ 
?>	
	<p><label class="label_input">title: </label><?php echo htmtocode($rs[title]);?></p>
	<p><label class="label_input">Author: </label><?php echo htmtocode($rs[NAME]);?></p>
	<p><label class="label_input">E-mail: </label><?php echo htmtocode($rs[email]);?></p>
	<p><label class="label_input">Abstract: <div  style="word-break: break-all;white-space: normal;"><?php echo htmtocode($rs[paper_abstract]);?></div></label></p>
<?php }?> 
<p style="margin:auto;position:relative;bottom:0;display:block;font-size:12px;margin-top:10px;color:grey;">Copyright©2018 PCSystem Cillivian</p>
            <p style="margin:auto;position:relative;bottom:0;display:block;font-size:12px;margin:0px;color:grey;">All rights reserved.</p>
        </div>
</body>
</html>
