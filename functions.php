<!DOCTYPE html>
<head><title>"User Defined Functions"</title></head>
<body>
<?php
//Without arguments
function sayhello()
{
	echo "Hello World.<br/>";
}
//Wih arguments
function sayhelloto($arg1)
{
	echo "Hello World {$arg1}.<br/>";
}
sayhello();
sayhelloto("Everyone");
//returning values
function add($arg1,$arg2)
{
	$sum=$arg1+$arg2;
	return $sum;
}
$ans=add(3,4);
echo $ans."<br/>"; 
//multiple returns using array
function arithmetic($arg1,$arg2)
{
	$sum=$arg1+$arg2;
	$sub=$arg1-$arg2;
	return array($sum,$sub);
}
list($ans1,$ans2)=arithmetic(19,14);
echo $ans1."<br/>"; 
echo $ans2."<br/>"; 
?>
</body>
</html>