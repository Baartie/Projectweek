<?php

function OpenCon()
{
    $dbhost ="localhost";
    $dbuser ="root";
    $dbpass ="";
    $db ="projectweek";
}

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db) or die ("Connection failed: %s\n". $conn -> error);

return $conn;

$name = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

$sql = "INSERT INTO users (id, firstname , infix , lastname)  VALUES (Null, '$username', '$email', '$password');";
echo $sql;

$result = mysqli_query($conn, $sql);
function CloseCon($conn)
 {
 $conn -> close();
 }

 ?>