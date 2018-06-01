<!DOCTYPE html>
<head><title>"htmencode"</title></head>
<body>
<?php // to encode < , > ," , &?>
<!--<a href="rawurlencode.php" > <Click> & go forth </a> ****wont work**** -->
<?php $linktext="<Click> & go forth" ?>
<a href="rawurlenode.php" ><?php echo htmlspecialchars($linktext) ?> </a>

</body>
</html>