<?php 
header("HTTP 1.1/ 404 ERROR");
header("X-Powered-By: Stfu");
?>
<!DOCTYPE html>
<head><title>"Headers"</title></head>
<body>
<?php
//wont work
//headers("HTTP 1.1/ 404");
echo "<pre>";
print_r(headers_list());
echo "</pre>";
?>
</body>
</html>