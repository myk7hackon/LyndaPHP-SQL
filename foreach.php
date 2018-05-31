<!DOCTYPE html>
<head><title>"ForEach"</title></head>
<body>
<?php
$numbers=array(1,2,3,4,5,6);
foreach($numbers as $value)
{
	echo $value;
	echo "<br/>";
}
//associative array
$map=array("hello"=>"Mayank","I"=>"jack","p"=>"kol");
foreach($map as $key=>$value)
{
	echo $key."=>".$value;
	echo "<br/>";
}
?>
</body>
</html>