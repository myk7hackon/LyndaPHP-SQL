<!DOCTYPE html>
<head><title>"Strings"</title></head>
<body>
<?php
echo "Hello World <br/>";
$first="Hello";
$second="World";
$phrase=$first." ".$second;
echo "$phrase <br/>";
echo "{$phrase} <br/>";

/*Functions of strings*/
$second="Humpty Dumpty had a great fall.Up upon the world so Highh";
echo strtolower($second);
echo "<br/>";
echo strtoupper($second);
echo "<br/>";
echo ucfirst($second);
echo "<br/>";
echo ucwords($second);
echo "<br/>";
//Some morw
echo strlen($second);
echo "<br/>";
echo "{$second}" .trim("       h   	h      jch    ");
echo "<br/>";
echo strstr($second,"had");
echo "<br/>";
echo str_replace("Dumpty","minnie",$second);
echo "<br/>";

?>


</body>
</html>