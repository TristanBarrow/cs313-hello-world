<?php
  $id = htmlspecialchars($_POST["course_id"]);
  $date = htmlspecialchars($_POST["date"]);
  $content = htmlspecialchars($_POST["content"]);

  echo $id;
  echo $date;
  echo $content;
?>