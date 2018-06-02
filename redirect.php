<?php
function redirection($name)
{
header("Location: {$name}");
exit;
}
$info=$_GET["id"];
if($info==1)
	redirection("basic.html");
else
	redirection("headers.php");
?>
<!DOCTYPE html>
<head><title>"Redirect"</title></head>
<body>
</body>
</html>