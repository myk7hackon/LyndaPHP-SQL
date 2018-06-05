<?php
$name="test";
$value=45;
$expire=time()+86400*45;
setcookie($name,$value,$expire);
?>
<!DOCTYPE html>
<head><title>"Cookies Reading"</title></head>
<body>
<h1>Contents of Cookies</h1>
<pre>
<?php
print_r($_COOKIE);
?>
</pre>
</body>
</html>