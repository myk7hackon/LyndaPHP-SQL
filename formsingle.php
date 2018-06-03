<?php
if(isset($_POST["submit"]))
{
$username=$_POST["Username"];
$password=$_POST["Password"];
if($username=="Mayank"&&$password=="hello")
{
	header("Location: basic.html");
}
else
	echo "Incorrect id or password";
}
else
{
	echo "Log in please";
	$username="";
	$password="";
}
?>
<!DOCTYPE html>
<head><title>"Form"</title></head>
<body>
<form action="formsingle.php" method="post">
Username:<input type="text" name="Username" value="<?php echo htmlspecialchars($username) ?>"> <br/>
Password:<input type="password" name="Password" value=""><br/>
<br/>
<br/>
<br/>
<input type="submit" name="submit" value="Aage_bdho">
<br/>
</body>
</html>