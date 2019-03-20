<?php
$HOST = 'localhost';
$DB = 'your_db';
$USERNAME = 'root';
$PASSWORD = 'root';

$DSN = "mysql:host=$HOST;dbname=$DB;";

$OPTIONS = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
	$db = new PDO($DSN, $USERNAME, $PASSWORD, $OPTIONS);
} catch(Exception $e) {
	print_r($e);
}