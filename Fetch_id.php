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
<head><title>"Fetch Id"</title></head>
<body>
<?php
$query="Select * from test";
$result=mysqli_query($connection,$query);
if(mysqli_errno($connection))
	die("Error ".mysqli_error($connection));
while($row=mysqli_fetch_assoc($result))
{
	echo $row["Middle"]."( ".$row["id"]." )"."<br/>";
}
?>
</body>
</html>