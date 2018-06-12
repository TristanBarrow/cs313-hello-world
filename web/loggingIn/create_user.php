<?php 
  $username = htmlspecialchars($_POST['username']);
  $password = htmlspecialchars($_POST['password']);

  require('../notes/initDB.php');
  $db = get_db();
  $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  $query = 'INSERT INTO user (password) VALUES ()';
?>