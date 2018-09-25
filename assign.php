<?php
 include("conn.php");

 if($_POST['submit']){


  $sql="insert into assigned_to (pc_code,paper_number) " .
  		"values ('$_POST[pc_code]','$_POST[paper_number]')";
  mysql_query($sql);
  echo "<script language=\"javascript\">alert('addition success');history.go(-1)</script>";

 }
?>
<SCRIPT language=javascript>
function CheckPost()
{
	if (myform.pc_code.value=="")
	{
		alert("please input the pc member code");
		myform.pc_code.focus();
		return false;
	}
	if (myform.paper_number.value=="")
	{
		alert("please input the number of the paper");
		myform.paper_number.focus();
		return false;
	}
}
</SCRIPT>
<!DOCTYPE html>
<html>
<head>
	<title>assign</title>
	<link rel="stylesheet" type="text/css" href="css/total.css">
	 <link rel="stylesheet" type="text/css" href="css/home.css">
<meta charset="utf-8">
</head>
<body>
	<div id="login_frame">
<form action="assign.php" method="post" name="myform" onsubmit="return CheckPost();">
<div class="post_frame">
  	  <p>
            <label class="label_input">
                 PC code:</label>  <input class="text_field" name="pc_code" type="text" maxlength="25" placeholder="please input the code of the pc member" value=""/></p>
                  
                
               <p>  <label class="label_input">
                 	
                Paper number:</label>  <input class="text_field" name="paper_number" type="text" maxlength="25" placeholder="please input the number of the paper" value=""/></p>
                
  <button class="btn" type="submit" name="submit" value="Add">Submit</button>
<button class="btn"  name="back" value="Back"><a style="font-family: Microsoft Yahei; 
	text-decoration: none; color: white;
    font-size: 18px;" href="manage.php"> Back</a></button>
</div>
<p style="margin:auto;position:relative;bottom:0;display:block;font-size:12px;margin-top:10px;color:grey;">Copyright©2018 PCSystem Cillivian</p>
            <p style="margin:auto;position:relative;bottom:0;display:block;font-size:12px;margin:0px;color:grey;">All rights reserved.</p>
  </form>
</div>
</body>
</html>