<!DOCTYPE html>
<head><title>"Second Page"</title></head>
<body>
<?php $link_name="FirstPage" ?>
<a href="firstpage.php?id=1"><h3><?php echo $link_name?></h3></a>
<?php echo $_GET["company"]; ?>
</body>
</html>