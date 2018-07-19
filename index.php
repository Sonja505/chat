<?php
session_start();
$_SESSION['user'] = (isset($_GET['user']) === true) ? (int)$_GET['user'] : 0;

require 'core/classes/Core.php';
require 'core/classes/Chat.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Chat</title>

</head>
<body>


<div class="chat">
	<div class="messages">
		
	</div>
<textarea class="entry" placeholder="Type here and hit Return. Use Shift + Return for new line"></textarea>

</div>

<script src="https://code.jquery.com/jquery-1.8.2.min.js"></script>
	<script src="js/chat.js"></script>
</body>
</html>