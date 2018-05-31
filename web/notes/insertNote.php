<?php
  $id = htmlspecialchars($_POST["course_id"]);
  $date = htmlspecialchars($_POST["date"]);
  $content = htmlspecialchars($_POST["content"]);

  // echo $id;
  // echo $date;
  // echo $content;

  $query = "INSERT INTO note (course_id, content, date) VALUES (:id, :content, :date)";

  $stmt = $db->prepare($query);
  $stmt->bindValue(":id", $id, PDO::PARAM_INT);
  $stmt->bindValue(":date", $date, PDO::PARAM_INT);
  $stmt->bindValue(":content", $content, PDO::PARAM_INT);
  // Bind values
  $stmt->execute();

  echo 'inserted';

?>