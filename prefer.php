<!DOCTYPE html>
<html>
<head>
	 <meta charset="utf-8">
	<title>
		preference
	</title>
	<link rel="stylesheet" type="text/css" href="css/total.css">
	<link rel="stylesheet" type="text/css" href="css/list.css">
	<link rel="stylesheet" type="text/css" href="css/register.css">
</head>
<body bgcolor="#E0EEEE">
	<div class="title" style=" text-align: center;word-spacing: 25px;">
    <a class="link" href="add.php">Add</a>
    <a class="link" href="list.php">List</a>
    <a class="link" href="login.php">Login</a>
  </div>
	<label style="font-size: 25px; font-family:微软雅黑; text-align: center;">Paper preference</label>
	<div class="container" id="app" style="background-color: rgba(219, 219,219, 0.5);  
  " >
<div class="content" style="background-color: rgba(219, 219,219, 0.5);  
  " >
 <?php
 header('Content-Type: text/html; charset=utf8');
include 'conn.php'; 
 if($_POST['submit']){


  $sql="update prefers set preference=$_POST[preference_change] where 'pc_code'=$_POST[pc_code] and paper_number='$_POST[paper_number]'";
  mysql_query($sql);
  echo "<script language=\"javascript\">alert('change successfully');history.go(-1)</script>";

 }
$pc_code=$_GET[pc_code]; 
$query="SELECT * from prefers where pc_code ='$pc_code'";
$result=mysql_query($query); 
while ($rs=mysql_fetch_array($result)){ 
?>
<form action="prefer.php" method="post" name="myform" onsubmit="return CheckPost();">
	<p><label class="label_input">pc_code: </label><input type="text" name="pc_code" value="<?php echo htmtocode($rs[pc_code]);?>"></p>
	<p><label class="label_input">paper: </label> <input type="text" name="paper_number" value="<?php echo htmtocode($rs[paper_number]);?>"></p>
	<p><label class="label_input">preference: </label><?php echo htmtocode($rs[preference]);?></p>
<p><label class="label_input">change preference: </label>
		<select class="text_field" name="preference_change" style="color: rgb(153,153,153); " onchange="choose(this)" value="" placeholder="please change the preferencee of the paper">
			<option value="">please select</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option></select></p>
                    <button class="btn" type="submit" name="submit" value="change">Change</button>
	<br><br>
<hr>
<hr>
</form>
<?php }?> 
</div>
</div>

<p style="margin:auto;position:relative;bottom:0;display:block;font-size:12px;margin-top:10px;color:grey;">Copyright©2018 PCSystem Cillivian</p>
            <p style="margin:auto;position:relative;bottom:0;display:block;font-size:12px;margin:0px;color:grey;">All rights reserved.</p>
</body>
</html>
<SCRIPT language=javascript>
function CheckPost()
{
	if (myform.preference_change.value!=="")
	{
		myform.preference_change.focus();
		return true;
	}
	
}
</SCRIPT>