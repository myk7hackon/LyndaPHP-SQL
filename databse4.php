<?php
$dbhost="localhost";
$dbuser="dbuser1";
$dbpassword="monica";
$dbname="mayank";
$connection=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
if(!$connection)
	die("Gyi Bhais Paani Mein");
?>
<!DOCTYPE html>
<head><title>"Escape string"</title></head>
<body>
<?php
$name="Shyam";
$middle="Sunder's";
$last="gori'a";

$middle=mysqli_real_escape_string($connection,$middle);
$last=mysqli_real_escape_string($connection,$last);

$query="INSERT INTO test ";
$query.="(Name,Middle,Last) ";
$query.="VALUES('{$name}','{$middle}','{$last}')";

$result=mysqli_query($connection,$query);

if(!$result)
	die("mysqli_error");
?>
</body>
</html>