<!DOCTYPE html>
<head><title>"Arrays"</title></head>
<body>
<?php
$numbers=array(1,2,3,4,5,6,7,8);
echo $numbers[3];
echo "<br/>";
//mixed array
$mixed=array(1,2,3,"hello",array(1,2,3,"ji"));
//print composition
?>
<pre>
<?php echo print_r($mixed) ?>
</pre>
<?php echo $mixed[4][3];echo "<br/>";?>
<?php //adding to the end 
$mixed[]='u';
echo print_r($mixed);
echo "<br/>";
?>
</body>
</html>