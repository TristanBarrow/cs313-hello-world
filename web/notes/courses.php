<?php
  require_once("./initDB.php");
  $db = get_db();
  if (!isset($db)) {
    die("DB Connection was not set");
  }

  $query = "SELECT id, name, number FROM course";
  $stmt = $db->prepare($query);
  // Bind values
  $stmt->execute();
  $courses = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>NOTES: Courses</title>
</head>
<body>
  <h1>Courses</h1>
  <ul>
  <?php
    foreach ($courses as $course) {
      $id = $course['id'];
      $name = $course['name'];
      $number = $course['number'];
      echo "<li><a href='./course.php?course_id=$id'>$number - $name</a></li>";
    }
  ?>
  </ul>
</body>
</html>