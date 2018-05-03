<div class="nav-bar">
  <a 
    href='https://cs313-tristan-barrow-homepage.herokuapp.com/php/about-us.php' 
    class="nav-bar__about-us <?php if($activePage === "AboutUs") { echo "active"; }?>"
  >
    About Us
  </a>
  <a 
    href='https://cs313-tristan-barrow-homepage.herokuapp.com/home.php' 
    class="nav-bar__home <?php if($activePage === "Home") { echo "active"; }?>"
  >
    Home
  </a>
  <a 
    href='https://cs313-tristan-barrow-homepage.herokuapp.com/php/login.php' 
    class="nav-bar__login <?php if($activePage === "Login") { echo "active"; }?>"
  >
    Login
  </a>
</div>