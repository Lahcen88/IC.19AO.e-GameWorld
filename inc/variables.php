<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="gameworld";

//This is the connection//
$conn = new mysqli($servername, $username, $password, $dbname) or die ($conn->error);
?>