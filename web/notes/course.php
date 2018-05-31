<?php
  $courseId = $_GET["course_id"];
  require_once("./initDB.php");
  $db = get_db();
  if (!isset($db)) {
    die("DB Connection was not set");
  }

  $query = "SELECT id, name, number FROM course WHERE id=:id";
  $stmt = $db->prepare($query);
    // Bind values
  $stmt->bindValue(":id", $courseId, PDO::PARAM_INT);
  $stmt->execute();
  $course = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>NOTES FOR</title>
</head>
<body>
  <?php
    var_dump($course);
  ?>
</body>
</html>