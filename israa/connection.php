<!DOCTYPE html>
<html>

<body>
<?php
$username = "root";
$password = "P@ssw0rd";
$db = "content";

$connection = mysqli_connect("localhost",$username,$password,$db);
$query = "Select * from catalog";


if(!$connection)
  die("could not connect".mysqli_connect_error());
Else
  echo "Could not Connected";


?>


</body>
</html>