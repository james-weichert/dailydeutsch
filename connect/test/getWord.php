<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php

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

   echo "alert('Hello')";
   
   mysql_close($conn);
?>
</body>
</html>