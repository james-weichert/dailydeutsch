<?php

try
{
	$pdo = new PDO('mysql:host=localhost;dbname=germanNouns', 'germanNouns', 'germanNouns');
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$pdo->exec('SET NAMES "utf8"');
}
catch (PDOExpception $e)
{
	$output = 'Unable to connect to the database server.'.$e->getMessage();
	include 'index.html.php';
	exit();
}

try {
	$sql = 'SELECT * FROM `nouns` ORDER BY RAND() LIMIT 0,1;'
	$result = $pdo->query($sql);
	
} catch (PDOExpception $e) {
	$output = 'Error retrieving words'.$e->getMessage();
	include 'index.html.php';
	exit();
}

include 'index.html.php';