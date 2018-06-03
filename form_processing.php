<!DOCTYPE html>
<head><title>"Form_Processing"</title></head>
<body>
<?php
/*echo "<pre>";
print_r($_POST);
echo "<pre/>";*/
$username="NOone";
$password="SHit";
if(isset($_POST["Username"]))
$username=$_POST["Username"];
if(isset($_POST["Password"]))
$password=$_POST["Password"];
echo "{$username} : {$password} ";
?>
</body>
</html>