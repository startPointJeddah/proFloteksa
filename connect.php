<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'projectdb';
$conn=new mysqli($servername ,$username ,$password ,$dbname ) or die("failing to connect to the DB");
$conn->set_charset('utf8');

?>
