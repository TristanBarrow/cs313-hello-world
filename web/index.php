<!DOCTYPE html>
<html lang='en'>
<head>
  <meta charset='UTF-8'>
  <meta name='viewport' content='width=device-width, initial-scale=1.0'>
  <meta http-equiv='X-UA-Compatible' content='ie=edge'>
  <link rel='stylesheet' href='./css/index.css' />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <script src='./javascript/script.js' ></script>
  <?php 
    require("./php/functions.php");
  ?>
  <title>Tristan's cs313 Home Page</title>
</head>
<body>

  <div class='header'>
    <h1 class="header__title">Tristan's cs313 Home Page</h1>
  </div>

  <div class='body'>
    <h1 class='body__title'>My Assignments</h1>
    <div class="body__links">
        <div class='links'>
          <?php 
            require("./php/links.php"); 
          ?>
          <!-- <img onclick='imgClick()' class='links__image' src="./res/images/react-redux.jpg" alt="react-redux">  -->
        </div>
        <div class='ilovereact' id='showILoveReact'></div>
    </div>
  </div>

  <div class='footer'>
    <p class='thankyou'>Thank You for viewing My Assignments</p>
  </div>

</body>
</html>
