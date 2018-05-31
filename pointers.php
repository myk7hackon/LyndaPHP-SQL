<!DOCTYPE html>
<head><title>"Pointers"</title></head>
<body>
<?php
$numbers=array(1,2,3,4,5,6,7);
echo current($numbers)."<br/>";//first element
next($numbers);//incrementing pointer
echo current($numbers)."<br/>";
next($numbers);
echo current($numbers)."<br/>";
next($numbers);
echo current($numbers)."<br/>";
next($numbers);
echo current($numbers)."<br/>";
next($numbers);
echo current($numbers)."<br/>";
next($numbers);
echo current($numbers)."<br/>";
next($numbers);
echo current($numbers)."<br/>";//pointing to null
//now resetting the pointer
reset($numbers);
while($value=current($numbers))
{
	if(is_int($value))
	{
	echo $value."<br/>";
	next($numbers);
}
else
	break;
}


?>
</body>
</html>