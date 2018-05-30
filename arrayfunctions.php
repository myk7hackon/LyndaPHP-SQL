<!DOCTYPE html>
<head><title>"Arrays_functions"</title></head>
<body>
<?php
$numbers=array(1,2,3,4,5,6,7,8);
echo count($numbers);
echo "<br/>";
echo max($numbers);
echo "<br/>";
echo min($numbers);
echo "<br/>";
sort($numbers);
print_r($numbers);
echo "<br/>";
rsort($numbers);
echo "<pre>";
print_r($numbers);
echo "<pre/>";
echo "<br/>";
//array to string
$string=implode(" ",$numbers);
echo $string;
echo "<br/>";
//string to array
$numbers1=explode(" ",$string);
echo "<pre>";
print_r($numbers1);
echo "<pre/>";
echo "<br/>";
//to see if in array or not
echo in_array(5,$numbers1);
echo "<br/>";
echo in_array(12,$numbers1);
echo "<br/>";
?>
</body>
</html>