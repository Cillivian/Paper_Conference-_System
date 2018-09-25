<?php
header('Content-Type: text/html; charset=utf8');
 include("conn.php");
$person_id=$_GET[person_id]; 
$is_contact="y";
 if($_POST['submit']){


  $sql="insert into paper (paper_number,title,paper_type,paper_abstract,is_pc,decision) " .
  		"values ('$_POST[paper_number]','$_POST[title]','$_POST[paper_type]','$_POST[paper_abstract]','$_POST[is_pc]','$_POST[decision]')";
      $sql2="insert into author (person_id,paper_number,is_contact) values ('$person_id','$_POST[paper_number]','$is_contact')";
      mysql_query($sql2);
  mysql_query($sql);
  echo "<script language=\"javascript\">alert('发布成功');history.go(-1)</script>";

 }
?>
<SCRIPT language=javascript>
function CheckPost()
{
	if (myform.paper_number.value=="")
	{
		alert("please input the number of the paper");
		myform.paper_number.focus();
		return false;
	}
	if (myform.title.value=="")
	{
		alert("please input the title of the paper");
		myform.title.focus();
		return false;
	}if (myform.paper_type.value=="")
	{
		alert("please input the type of the paper");
		myform.paper_type.focus();
		return false;
	}if (myform.paper_abstract.value=="")
	{
		alert("please input the abstract of the paper");
		myform.paper_abstract.focus();
		return false;
	}if (myform.is_pc.value=="")
	{
		alert("whether the paper written by a PC member");
		myform.is_pc.focus();
		return false;
	}
}
</SCRIPT>
<!DOCTYPE html>
<html>
<head>
	 <link rel="stylesheet" type="text/css" href="css/total.css">
	 <link rel="stylesheet" type="text/css" href="css/register.css">
<meta charset="utf-8">
	<title></title>
</head>
<body>
<div class="title" style=" text-align: center;word-spacing: 25px;">
    <a class="link" href="add.php">Add</a>
    <a class="link" href="list.php">List</a>
    <a class="link" href="login.php">Login</a>
  </div>
  <div id="login_frame">
  <form action="add.php" method="post" name="myform" onsubmit="return CheckPost();">
<div class="post_frame">
  	  <p>
            <label class="label_input">
                 Number:</label>  <input class="text_field" name="paper_number" type="text" maxlength="25" placeholder="please input the number of the paper" value=""/></p>
                  <p>
            <label class="label_input">
                Title:</label>  <input class="text_field" name="title" type="text" maxlength="25" placeholder="please title the number of the paper" value=""/></p>
                	<p>
                	<label class="label_input">
                 
                Type:</label><select class="text_field" name="paper_type" style="color: rgb(153,153,153); " onchange="choose(this)" value="" placeholder="please input the type of the paper">
                    <option value="">please select</option>

                    <option value="research">research</option>

                    <option value="demo">demo</option>
                    <option value="industrial">industrial</option>
                </select></p>
                <p> <label class="label_input">
                 
              Abstract:</label>  <input class="text_field" name="paper_abstract" type="text" maxlength="25" placeholder="please input the abstract of the paper" value=""/></p>
               <p> <label class="label_input">
                 	
               Is_pc:</label> <select class="text_field" name="is_pc" style="color: rgb(153,153,153); " onchange="choose(this)" value="" placeholder="whether the paper written by a PC member">
                    <option value="">please select</option>

                    <option value="y">yes</option>

                    <option value="n">no</option>
                </select>

           </p>
               <p>  <label class="label_input">
                 	
                Decision:</label>  <input class="text_field" name="decision" type="text" maxlength="25" placeholder="please input the number of the paper" value=""/></p>
                
  <button class="btn" type="submit" name="submit" value="发布">Submit</button>

</div>
<p style="margin:auto;position:relative;bottom:0;display:block;font-size:12px;margin-top:10px;color:grey;">Copyright©2018 PCSystem Cillivian</p>
            <p style="margin:auto;position:relative;bottom:0;display:block;font-size:12px;margin:0px;color:grey;">All rights reserved.</p>
  </form>
</div>
</body>
</html>
