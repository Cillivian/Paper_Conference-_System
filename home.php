<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/home.css">
  <link rel="stylesheet" type="text/css" href="css/list.css">
  <title>list</title>
  <script type="text/javascript">
  	function onsearch()
  	{
  		alert("1");
  		var number=document.getElementById("inputtext").value;
  	
  	}
  </script>
</head>
<body >
  <div class="title" style="text-align: center;word-spacing: 25px;">
  	<div id="box">
<input type="text" name="search" id="inputtext" placeholder="please input the number of paper" ><div id="search"> <a href="#" onclick="onsearch()">SEARCH </a> </div>
  </div>
    <a class="link" href="add.php">Add</a>
    <a class="link" href="list.php">List</a>
    <a class="link" href="login.php">Login</a>
  </div>
<div class="container" id="app">
<div class="content">
	<div class="name">
			<table width="100%"" border="0" cellpadding="2" cellspacing="2" bgcolor="#e0eeee">
	<tr>
		<td width="8%"> <div align="center">number</div></td>
		<td width="35%"> <div align="center">title</div></td>
		<td width="15%"> <div align="center">type</div></td>
		<td width="30%"> <div align="center">author</div></td>
		<td width="80%"> <div align="center">abstract</div></td>
		<td width="30%"> <div align="center">email</div></td>
	</tr>
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
AND author.person_id = person.person_id ";
  $query=mysql_query($SQL);
  while($row=mysql_fetch_array($query)){
?>
  		<tr bgcolor="#777">
		<td><a href="detail.php?paper_number=<?=$row[paper_number]?>"><?php  echo $row[paper_number];?></td>
		<td><?php  echo $row[title];?></td>
		<td><?php echo $row[paper_type];?></td>
		<td><?php echo $row[NAME];?></td>
		<td><?php echo $row[paper_abstract];?></td>
		<td><?php echo $row[email];?></td>
		
	</tr>
<?php 
  }
?>
<td colspan="4">&nbsp;</td>
</table>

	</div>
</div>
</body>
</html>

