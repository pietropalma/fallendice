<?php
$servername = 'localhost';
$username = 'php';
$password = 'nMm&9eW5+U:;aL$w';
$dbname = 'fallendice';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
	die('Can\'t connect to database.');
}