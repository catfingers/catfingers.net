<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<link rel="stylesheet" type="text/css" href="css/site.css"/>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<title>contact</title>
</head>
<body class="page">
	<div class="header">
		
	</div >
	
	<?php
	/*set any vars from posted form here. Would be used to set helpful messages in the form fields after
	failed submission etc. */
	$status = $_REQUEST["stat"];
	if(isset($status)) {
		echo "<p class=\"warning\">something went wrong in sending your message. You can either try again or give up.</p>";
	}

	?>
	
	<form method="post" action="msg.php" class="fullsize-contact">
	  your email address<br/>
	  <input name="sender" type="text"/><br/>
	  your message<br/>
	  <textarea name="message" rows="10" cols="40"></textarea><br/>
	  <input type="submit" value="send message"/>
	</form>
	<p class="mini-contact">
		<a href="mailto:&#097;&#115;&#104;&#115;&#064;&#099;&#097;&#116;&#102;&#105;&#110;&#103;&#101;&#114;&#115;&#046;&#110;&#101;&#116;"/>contact</a>
	</p>
<div class="footer">
		contact | <a href="index.html">home</a>
	</div>
</body>
</html>