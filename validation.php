<!DOCTYPE html>
<head><title>"Basic"</title></head>
<body>
<?php
//check the username and password for validation.
if(preg_match("/@/",$_POST["Username"]))
	echo "Match";
else
	echo "NO MAtch";
?>
</body>
</html>