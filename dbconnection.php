<?php

function OpenCon()
{
    $dbhost ="localhost";
    $dbuser ="root";
    $dbpass ="";
    $db ="";
}

$conn = new mysqli($dbuser, $dbpass, $db) or die ("Connection failed: %s\n". $conn -> error);

return $conn;
}

function CloseCon($conn)
 {
 $conn -> close();
 }

 ?>