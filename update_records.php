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
<head><title>"Update"</title></head>
<body>
<?php
$name="Ajju";
$middle="Beechka";
$last="Bajju";
$id="Dinnanath";
$query="UPDATE test SET ";
$query.="Name='{$name}', ";
$query.="Middle='{$middle}', ";
$query.="Last='{$last}' ";
$query.="WHERE Middle='{$id}'";
$result=mysqli_query($connection,$query);
if(!$result&&mysqli_affected_rows($connection)==1)
	die("Phatt gyi");
mysqli_free_result($result);
?>
</body>
</html> 