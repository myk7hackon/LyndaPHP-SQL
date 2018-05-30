<!DOCTYPE html>
<head><title>"Booleans"</title></head>
<body>
<?php
$result1=true;
$result2=false;
echo is_bool($result2);
echo "<br/>";
echo $result2;
echo "<br/>";
//NULL and empty
$var1=null;
$var2="";
$var3;
echo is_null($var1);
echo "<br/>";
echo is_null($var2);
echo "<br/>";
echo is_null($var3);
echo "<br/>";
echo isset($var1);
echo "<br/>";
echo isset($var2);
echo isset($var3);
echo "<br/>";
echo "<br/>";
//empty is 1 for 0,0.0,empty string or null so all var1,var2 n var3 are empty
?>
</body>
</html>