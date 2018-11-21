<?php
/*
try
{
	$pdo = new PDO('mysql:host=localhost:3036;dbname=germanNouns', 'germanNouns', 'germanNouns');
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
	$output = $pdo->query($sql);

	
} catch (PDOExpception $e) {
	$output = 'Error retrieving words'.$e->getMessage();
	include 'index.html.php';
	exit();
}

include 'index.html.php';

*/

   $dbhost = 'localhost:3036';
   $dbuser = 'germanNouns';
   $dbpass = 'germanNouns';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);

   mysql_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $conn);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT * FROM `nouns` ORDER BY RAND() LIMIT 0,1';
   mysql_select_db('germanNouns');
   $result = mysql_query( $sql, $conn );
   //$values = mysql_fetch_array($result);
	//var_dump($values);
   
   if(! $result ) {
      die('Could not get data: ' . mysql_error());
   }

  	while($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
     $word = $row['word'];
     $article = $row['article'];
     $meaning = $row['meaning'];
     $level = $row['level'];
   }
   
   //echo $word;
   //echo "Fetched data successfully\n";
   
   mysql_close($conn);

   include 'index.html.php';
?>