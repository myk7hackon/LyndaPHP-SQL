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
<head><title>"Deletion"</title></head>
<body>
<?php
$id="Shankar";
$query="DELETE FROM test ";
$query.="WHERE Middle='{$id}'";
$query.=" LIMIT 1";//to limit deletion to one row
echo $query;
$result=mysqli_query($connection,$query);
if(!$result&&mysqli_affected_rows($connection)!=1)
	die("Phatt gyi");
?>
</body>
</html> 