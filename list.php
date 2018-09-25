<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/list.css">
  <title>list</title>
  
</head>
<body style="width: 900px;">
	<div class="head" >
  <div class="title" style="text-align: center;word-spacing: 25px;">
  	<div id="box">
<input type="text" name="search" placeholder="please input what movies you want"><div id="search"> SEARCH</div>
  </div>
  
    <div style="float: right; text-align: right;">
  <?php
session_start();
if(isset($_SESSION["code"])){
	
?>  <a class="link" href="add.php?person_id=<?php echo "{$_SESSION["person_id"]}"; ?>">Add</a>
    <a class="link" href="list.php">List</a>
    <a class="link" href="login.php">Login</a>
<a href="profile.php?person_id=<?php echo "{$_SESSION["person_id"]}"; ?>" title="personal profile" ><img src="images/default.gif" alt="personal profile">
</a>

<a href="exit.php" style="word-spacing: 5px;" > Sign out </a>
<?php
}
else{
?>
<script>
alert("please login！");
window.location.href="exit.php";
</script>
<?php
}
?></div>
  </div>
  </div>

<div class="container" id="app" style="background-color: rgba(219, 219,219, 0.5);  
  " >
<div class="content" style="background-color: rgba(219, 219,219, 0.5);  
  " >
	<div class="name" style="background-color: rgba(219, 219,219, 0.5);  
  " >
		<dl class="board-wrapper">
<?php
header('Content-Type: text/html; charset=utf8');
 include("conn.php");
  $SQL="SELECT
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
AND author.person_id = person.person_id;";
  $query=mysql_query($SQL);
  while($row=mysql_fetch_array($query)){
?>
  			<dd class="outter">
				<div class="board-index board-index-1" style=" width: 50px;height: 50px; background-color: #777; font-family: 微软雅黑; font-size: 25px; text-align: center; position: center;">
					<b><?php echo htmtocode($row[paper_number]);?></b>
				</div>
				<a href="detail.php?paper_number=<?=$row[paper_number]?>" title="<?php echo htmtocode($row[title]);?>">
				</a>
				<div id="login_frame" style=" position: center;" >
					
						<div class="board-item-info" style=" align:left;position: center;">
							<p class="name">
								<div style="word-break: break-all;white-space: normal;"><a href="detail.php?paper_number=<?=$row[paper_number]?>" title="<?php echo htmtocode($row[title]);?>"><?php echo htmtocode($row[title]);?></a></div>
							</p>
							<p class="type">
								Type：<?php echo htmtocode ($row[paper_type]);?>
							</p>
							<p class="author">
								Author：<?php echo htmtocode ($row[NAME]);?>
							</p>
							<p class="email">
								Email：<?php echo htmtocode ($row[email]); ?> 
								<br>
							</p>
							<p class="abstract">
								Abstract：<div  style="word-break: break-all;white-space: normal;"><?php echo htmtocode ($row[paper_abstract]); ?> </div>
								<br>
							</p>
						
						</div>
						
					
				</div>
			</dd>

<?php 
  }
?>
		</dl>
	</div>
</div>
<p style="margin:auto;position:relative;bottom:0;display:block;font-size:12px;margin-top:10px;color:grey;">Copyright©2018 PCSystem Cillivian</p>
            <p style="margin:auto;position:relative;bottom:0;display:block;font-size:12px;margin:0px;color:grey;">All rights reserved.</p>
</body>
</html>
