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
<head><title>"Create"</title></head>
<body>
<?php
$name="Vijay";
$middle="Dinnanath";
$last="Chauahan";

$query="insert into test (Name,Middle,Last) VALUES('Shri','Shankar','Rao')";
$result=mysqli_query($connection,$query);
if(!$result)
	die("Phatt gyi");
?>
</body>
</html>