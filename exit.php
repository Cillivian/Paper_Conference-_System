<!DOCTYPE html >
<html >
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>login out</title>
</head>

<body>
<?php
session_start();
session_destroy();
?>
<script>
window.location.href="login.html";
</script>
</body>
</html>