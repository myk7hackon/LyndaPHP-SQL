<!DOCTYPE html>
<head><title>"Rawurlencode"</title></head>
<body>
<?php
$company="Johnson &Johnson"
?>
<a href=secondpage.php?company=<?php echo rawurlencode($company) ?> >"Second Page"</a>

</body>
</html>