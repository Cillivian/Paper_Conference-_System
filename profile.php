<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
	<link rel="stylesheet" type="text/css" href="css/total.css">
	<link rel="stylesheet" type="text/css" href="css/list.css">
</head>
<body>
	<div class="title" style=" text-align: center;word-spacing: 25px;">
    <a class="link" href="add.php">Add</a>
    <a class="link" href="list.php">List</a>
    <a class="link" href="login.php">Login</a>
  </div>
<?php
header('Content-Type: text/html; charset=utf8');
include("conn.php");
$person_id=$_GET[person_id];
$sql1="select * from pc_member where person_id=".$person_id;
$SQL=" select * from person where person_id=".$person_id;
$sql2="SELECT
    pc_chair.pc_code
FROM
    person,
    pc_member,
    pc_chair
WHERE
    person.person_id = pc_member.person_id AND pc_member.pc_code = pc_chair.pc_code AND person.person_id= ".$person_id;
    $result1=mysql_query($sql1);
    $result2=mysql_query($sql2);
$r1=mysql_fetch_array($result1);
    $r=mysql_fetch_array($result2);
    if ($r[pc_code]=="fl01") {
    	$title1="hello chair!";
    }
$result=mysql_query($SQL); 
while ($rs=mysql_fetch_array($result)){ 
?>	
	<p><label class="label_input">Name: </label><?php echo htmtocode($rs[name]);?></p>
	<p><label class="label_input">Title:   </label><?php echo htmtocode($rs[title]);?></p>
	<p><label class="label_input">E-mail: </label><?php echo htmtocode($rs[email]);?></p>
	<p><label class="label_input">Institution: </label><?php echo htmtocode($rs[institution]);?></p>
	<p><label class="label_input">Telephone: </label><div  style="word-break: break-all;white-space: normal;"><?php echo htmtocode($rs[telephone_number]);?></div></p>
	<button><a style="font-family: Microsoft Yahei; 
    text-decoration: none; color: white;
    font-size: 18px;" href="prefer.php?pc_code=<?php echo htmtocode($r1[pc_code]);?>">preferences</a></button>
    <br>
    <div><a href="manage.php"><?php echo ($title1); ?></a>
<?php }?> </div>
	

</body>
</html>