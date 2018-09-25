<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login in</title>
</head>

<body>
<?php 
include("conn.php");
session_start();

$person_id=$_REQUEST["person_id"];
$password=$_REQUEST["password"];

$dbperson_id=null;
$dbpassword=null;

$result=mysql_query("select * from person where person_id='".$person_id."';");
while($row=mysql_fetch_array($result)){
 $dbperson_id=$row["person_id"];
 $dbpassword=$row["password"];
 
}
if(is_null($dbperson_id)){
?>
<script>
alert("can't find this id！");
window.location.href="login.html";
</script>
<?php 
 }
else{
 if($dbpassword!=$password){
?>
<script>
alert("password error！");
window.location.href="login.html";
</script>    
<?php
 }
 else{
 $_SESSION["person_id"]=$person_id;
 $_SESSION["name"]=$row["name"];
 $_SESSION["code"]=mt_rand(0,100000);
?>
<script>
window.location.href="list.php";
</script> 
<?php
 }
 }
mysql_close($conn);
?>

</body>
</html>