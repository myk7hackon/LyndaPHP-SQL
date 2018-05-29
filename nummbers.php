<!DOCTYPE html>
<head><title>"Numbers"</title></head>
<body>
<?php

$var1=10;
$var2=11;
$var3=12;
echo $var1+$var2+$var3;
echo "<br/>";
echo abs($var1-$var2);
echo "<br/>";
echo sqrt($var1);
echo "<br/>";
echo pow($var1,3);
echo "<br/>";
echo rand();
echo "<br/>";
echo rand(100,1000);
echo "<br/>";
//php conversions
echo 12+"1231";
echo "<br/>";
//echo 12+"2houses" error
echo "<br/>";
//Floating points
$float1=1.102802;
echo round($float1);
echo "<br/>";
echo floor($float1);
echo "<br/>";
echo ceil($float1);
echo "<br/>";
//checking for integer or float
echo "Is float1 an integer ".is_int($float1);
echo "<br/>";
$float1=3;
//Now
echo "Is float1 an integer ".is_int($float1);

?>
</body>
</html>