<!-- Header block -->
<?php
  include 'php/dbh.php';
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Hair Boys</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
  <body>
    <header>
      <div class="freeshippingbar">
        FREE SHIPPING ON ALL CANADIAN ORDERS OVER $50
      </div>
      <div class="logo-container">
        <a class="nav-link" href=index.php><img src="images/WebLogoSM.png" class="logo-header" alt="logo" /></a>
      </div>
      <nav>
        <ul class="nav-links">
          <li><a class="nav-link" href=index.php>Home</a></li>
          <li><a class="nav-link" href=products.php>Products</a></li>
          <li><a class="nav-link" href="index.php#brands">Brands</a></li>
          <li><a class="nav-link" href="index.php#about-us">About Us</a></li>
          <li>
            <!-- Searchbar that will link to search result page and output results -->
            <form action="search.php" method="POST">
              <input id="searchbar" type="text" name="search" placeholder="Search">
              <button type="submit" name="submit-search" id="searchButton"><img src="images/searchicon.png" alt="searchicon" /></button>
            </form>
          </li>
        </ul>
      </nav>
      <div class="cart">
        <img src="images/cart.svg" alt="cart" />
      </div>
    </header>
  </body>
  </html>
