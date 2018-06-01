<!DOCTYPE html>
<head><title>"Function Scopes"</title></head>
<body>
<?php
$bar="hello"; //global scope
function foo()
{
	$bar="shit";
}
echo $bar."<br/>";
foo();
echo $bar."<br/>";
//no change because of global scope
//using global keyword
function foo2()
{
	global $bar;
	$bar ="shit";
}
echo $bar."<br/>";
foo2();
echo $bar."<br/>";
//Way around
//default arguments
function foo3($name="Sheena")
{
	echo "Helooooooooooooooooooooooo!   {$name}.<br/>";
}
foo3("Mayank");
//using default argument
foo3();
?>
</body>
</html>