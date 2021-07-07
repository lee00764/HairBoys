<!-- Index page -->
<?php
  //Allow connection to database
  include 'php/header.php';
 ?>

<main>
    <!--Company name and banner-->
    <div class="companyname">
      <h1>Hair Boys</h1>
      <p>Purveyors of Fine Grooming Products</p>
    </div>
    <div class="banner">
      <img src="./images/banner.jpg" alt="banner">
    </div>
    <!--Featured products-->
    <div class="featured">
      <h2>Featured Products</h2>
    </div>
    <div class="featprod">
      <a href=productgrimgrease.php><img src="./images/grimgrease.jpg" alt="ggprod" /></a>
      <a href=productlockharts.php><img src="./images/lockharts.jpg" alt="lockprod" /></a>
    </div>
    <!--Brand logos of products-->
    <div id="brands">
      <h3>Brands</h3>
      <br>
      <div class="brands-logo-row1">
        <img src="./images/arclogo.png" alt="arclogo">
        <img src="./images/flaglogo.png" alt="flaglogo">
        <img src="./images/grimlogo.png" alt="grimlogo">
      </div>
      <div class="brands-logo-row2">
        <img src="./images/locklogo.png" alt="locklogo">
        <img src="./images/reuzellogo.png" alt="reuzellogo">
        <img src="./images/shearlogo.png" alt="shearlogo">
      </div>
    </div>
    <!--About the website designers-->
    <div id="about-us">
      <h4>About Us</h4>
      <br>
      <div class="usphotos">
        <img src="./images/KuoChen.jpg" alt="KuoChen">
        <img src="./images/Thalia.jpg" alt="Thalia">
      </div>
      <p>
        We are Kuo-Chen Lee and Thalia Lin.<br>
        Two students at Algonquin College.<br>
        We made this website!<br>
      </p>
    </div>
</main>

<?php
  include 'php/footer.php';
 ?>
