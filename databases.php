<?php
//Establishing connection
$dbhost="localhost";
$dbuser="myk7hackon";
$dbpassword="password";
$dbname="mayank";
$connection=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
if(mysqli_errno($connection))
{
	die(mysqli_error($connection).'( '.mysqli_errno($connection).' )');
}
else
	echo "Hurrah.<br/>";
?>
<?php
//mysqli_free_result($result);
$query="Select  * from Student";
$resulti=mysqli_query($connection,$query);
if(!$resulti)
	die("GYI BHAIS PAANI MEIN");
?>
<?php
//displaying results
$i=1;
while($row=mysqli_fetch_assoc($resulti))
{
	var_dump($row);
	echo "{$i}  <hr/>.<br/>.<br/>";
	$i++;
}
mysqli_free_result($resulti);
	?>
<!DOCTYPE html>
<head><title>"Databases"</title></head>
<body>
<?php
?>
</body>
</html>
<?php
//Closing connection
mysqli_close($connection);
?>