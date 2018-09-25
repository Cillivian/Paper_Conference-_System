<?php
 include("conn.php");

 if($_POST['submit']){


  $sql="insert into pc_member (pc_code,person_id) " .
  		"values ('$_POST[pc_code]','$_POST[person_id]')";
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
	if (myform.person_id.value=="")
	{
		alert("please input the id of the person");
		myform.person_id.focus();
		return false;
	}
}
</SCRIPT>
<!DOCTYPE html>
<html>
<head>
	<title>addPCM</title>
	<link rel="stylesheet" type="text/css" href="css/total.css">
	 <link rel="stylesheet" type="text/css" href="css/register.css">
<meta charset="utf-8">
</head>
<body>
	<div id="login_frame">
<form action="add_pcm.php" method="post" name="myform" onsubmit="return CheckPost();">
<div class="post_frame">
  	  <p>
            <label class="label_input">
                 PC code:</label>  <input class="text_field" id="pc_code" name="pc_code" type="text" maxlength="25" placeholder="please input the code of the pc member" value=""/></p>
                  
                
               <p>  <label class="label_input">
                 	
                PersonID:</label>  <input class="text_field" id="person_id" name="person_id" type="text" maxlength="25" placeholder="please input the id of the person" value=""/></p>
                
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