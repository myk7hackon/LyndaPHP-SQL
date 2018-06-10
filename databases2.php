<?php
//Establishing connection
$dbhost="localhost";
$dbuser="myk7hackon";
$dbpassword="password";
$dbname="mayank";
$connection=mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname);
if(mysqli_errno($connection))
{
	die(mysqli_error($connection).'( '.mysqli_errno($connection).' )');
}
else
	echo "Hurrah.<br/>";
?>
<?php
//Query time
$query="insert into Student(Name,Roll) VALUES('Ravi',10)" ;
$result=mysqli_query($connection,$query);
$query="insert into Student(Name,Roll) VALUES('Ravin',101)" ;
$result=mysqli_query($connection,$query);
$query="insert into Student(Name,Roll) VALUES('Ravbi',110)" ;
$result=mysqli_query($connection,$query);
$query="insert into Student(Name,Roll) VALUES('Ravsi',102)" ;
$result=mysqli_query($connection,$query);
$query="insert into Student(Name,Roll) VALUES('Ravai',140)" ;
$result=mysqli_query($connection,$query);
$query="insert into Student(Name,Roll) VALUES('Rsavi',160)" ;
$result=mysqli_query($connection,$query);
$query="insert into Student(Name,Roll) VALUES('Rarvi',190)" ;
$result=mysqli_query($connection,$query);
>?