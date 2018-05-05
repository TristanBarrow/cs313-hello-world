<div class='body'>
    <h1 class='body__title'>My Assignments</h1>
    <div class="body__links">
        <div class='links'>
          <?php 
            $links = array(
              './php/hello-world.php' => 'Hello World',
            );

            foreach ($links AS $href => $text) {
              echo "<a class='links__link' href='";
              echo $href;
              echo "'>";
              echo $text;
              echo "</a>";
            }
          ?>
        </div>
    </div>

  </div>