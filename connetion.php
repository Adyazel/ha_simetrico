<?php
 $dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "12345";
 $db = "hacienda";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);



?>
