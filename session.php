<?php
session_start();
?>

<!DOCTYPE html>
<head><title>"Sessions"</title></head>
<body>
<?php
$_SESSION["name"]="Mayank";
$name=$_SESSION["name"];
echo $name;
?>
</body>
</html>