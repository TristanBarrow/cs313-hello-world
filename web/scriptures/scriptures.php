<?php 
  $dbUrl = getenv('DATABASE_URL');

  $dbopts = parse_url($dbUrl);
  
  $dbHost = $dbopts["host"];
  $dbPort = $dbopts["port"];
  $dbUser = $dbopts["user"];
  $dbPassword = $dbopts["pass"];
  $dbName = ltrim($dbopts["path"],'/');
  
  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);
  
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  $statement = $db->query('SELECT username, password FROM note_user');
  while ($row = $statement->fetch(PDO::FETCH_ASSOC))
  {
    echo 'user: ' . $row['username'] . ' password: ' . $row['password'] . '<br/>';
  }
?>