<!DOCTYPE html>
<head><title>"Type casting and juggling"</title></head>
<body>
<?php
$count = "2";
echo gettype($count);
echo "<br/>";
//string to integer
$count+=3;
echo gettype($count);
echo "<br/>";
$she="hello android number ".$count." . Welcome";
echo $she;
echo "<br/>";
echo "Type: ";echo gettype($she);
echo "<br/>";
//Explicit casting
settype($count,"string");
echo "Type: ";echo gettype($count);
echo "<br/>";
//or we can do
$count=(integer) $count;
echo "Type: ";echo gettype($count);
echo "<br/>";
?>
</body>
</html>