<?php
$name =$POST["Name"]

$emailid =$POST["Email"]

$Money = $POST["Money"]

$conn = mysqli_connect("localhost","root","","detials") or die("connection filed")
$sql = "INSERT INTO dle(Name,Email,Money) VALUES('{$name}','{$emailid','{$Money}' )";

$result = mysqli_query($conn, $sql) or die("query failed !!")

header ("location:basic/login.php")

mysqli_close($conn);

?>
