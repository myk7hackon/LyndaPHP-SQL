<!DOCTYPE html>
<head><title>"Continue"</title></head>
<body>
<?php
for($count=0;$count<=10;$count++)
{
	if($count==5)
		continue;
	else
		echo $count."<br/>";
}
?>
</body>
</html>