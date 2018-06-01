<!DOCTYPE html>
<head><title>"Urlencode"</title></head>
<body>
<?php
$company="Johnson &Johnson"
?>
<a href=secondpage.php?company=<?php echo urlencode($company) ?> >"Second Page"</a>

</body>
</html>