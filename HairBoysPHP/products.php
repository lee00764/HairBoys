<!-- Products page -->
<?php
  include 'php/header.php';
 ?>

<!-- Buttons to sort or filter -->
<div id="searchbuttons">
 <div id="showallbutton">
  <form name="5up" method="POST">
   <button class="btn" id="showall" name="showall">Show all</button>
  </form>
 </div>
 <div id="ratingbutton">
   <button class="btn" id="byRating">Filter by stars</button>
     <div id="filterdropdown">
       <div id="5up">
         <form name="5up" method="POST">
           <button class="btn" name="5up" id="5upbtn">✯✯✯✯✯</button>
        </form>
     </div>
       <div id="4up">
         <form name="4up" method="POST">
           <button class="btn" name="4up" id="4upbtn">✯✯✯✯</button>
         </form>
       </div>
       <div id="3up">
         <form name="3up" method="POST">
           <button class="btn" name="3up" id="3upbtn">✯✯✯</button>
         </form>
       </div>
       <div id="2up">
         <form name="2up" method="POST">
           <button class="btn" name="2up" id="2upbtn">✯✯</button>
         </form>
       </div>
       <div id="1up">
         <form name="1up" method="POST">
           <button class="btn" name="1up" id="1upbtn">✯</button>
         </form>
       </div>
     </div>
 </div>
 <div id="pricebutton">
   <button class="btn" id="byPrice">Filter by price</button>
     <div id="filterdropdown">
       <div id="25to30">
         <form name="25to30" method="POST">
           <button class="btn" name="25to30" id="25to30btn">$25 - $30</button>
        </form>
     </div>
       <div id="20to25">
         <form name="20to25" method="POST">
           <button class="btn" name="20to25" id="20to25btn">$20 - $25</button>
         </form>
       </div>
       <div id="15to20">
         <form name="15to20" method="POST">
           <button class="btn" name="15to20" id="15to20btn">$15 - $20</button>
         </form>
       </div>
       <div id="10to15">
         <form name="10to15" method="POST">
           <button class="btn" name="10to15" id="10to15btn">$10 - $15</button>
         </form>
       </div>
     </div>
 </div>
 <div id="ratingbutton">
   <button class="btn" id="byRating">By Rating</button>
     <div id="filterdropdown">
       <div id="highlowrate">
         <form name="highlowrate" method="POST">
           <button class="btn" name="highlowrate" id="highlowratebtn">Highest to Low</button>
        </form>
     </div>
       <div id="lowhighrate">
         <form name="lowhighrate" method="POST">
           <button class="btn" name="lowhighrate" id="lowhighratebtn">Lowest to high</button>
         </form>
       </div>
     </div>
 </div>
 <div id="pricebutton">
   <button class="btn" id="byPrice"> By Price</button>
   <div id="filterdropdown">
     <div id="highlowprice">
       <form name="highlowprice" method="POST">
         <button class="btn" name="highlowprice" id="highlowpricebtn">Highest to Low</button>
       </form>
     </div>
     <div id="lowhighprice">
       <form name="lowhighprice" method="POST">
       <button class="btn" name="lowhighprice" id="lowhighpricebtn">Lowest to high</button>
     </div>
   </div>
 </div>
</div>
<div class="prodPageContainer">

  <!-- PHP and SQL statements to search the database and filter/sort products -->
  <?php
    if(isset($_POST['showall'])){
      $sql = "SELECT *
              FROM products";
      $result = mysqli_query($connect, $sql);
      $queryResult = mysqli_num_rows($result);
      include 'php/fetchresult.php';
    }
    if(isset($_POST['highlowrate'])){
      $sql = "SELECT *
              FROM products
              ORDER BY rating DESC";
      $result = mysqli_query($connect, $sql);
      $queryResult = mysqli_num_rows($result);
      include 'php/fetchresult.php';
    }
    else if(isset($_POST['lowhighrate'])){
      $sql = "SELECT *
              FROM products
              ORDER BY rating";
      $result = mysqli_query($connect, $sql);
      $queryResult = mysqli_num_rows($result);
      include 'php/fetchresult.php';
    }
    else if(isset($_POST['highlowprice'])){
      $sql = "SELECT *
              FROM products
              ORDER BY price DESC";
      $result = mysqli_query($connect, $sql);
      $queryResult = mysqli_num_rows($result);
      include 'php/fetchresult.php';
    }
    else if(isset($_POST['lowhighprice'])){
      $sql = "SELECT *
              FROM products
              ORDER BY price";
      $result = mysqli_query($connect, $sql);
      $queryResult = mysqli_num_rows($result);
      include 'php/fetchresult.php';
    }
    else if(isset($_POST['5up'])){
      $sql = "SELECT *
              FROM products
              WHERE rating = 5";
      $result = mysqli_query($connect, $sql);
      $queryResult = mysqli_num_rows($result);
      include 'php/fetchresult.php';
    }
	  else if(isset($_POST['4up'])){
      $sql = "SELECT *
              FROM products
              WHERE rating = 4";
      $result = mysqli_query($connect, $sql);
      $queryResult = mysqli_num_rows($result);
      include 'php/fetchresult.php';
	}
    else if(isset($_POST['3up'])){
      $sql = "SELECT *
              FROM products
              WHERE rating = 3";
      $result = mysqli_query($connect, $sql);
      $queryResult = mysqli_num_rows($result);
      include 'php/fetchresult.php';
    }
    else if(isset($_POST['2up'])){
      $sql = "SELECT *
              FROM products
              WHERE rating = 2";
      $result = mysqli_query($connect, $sql);
      $queryResult = mysqli_num_rows($result);
      include 'php/fetchresult.php';
    }
    else if(isset($_POST['1up'])){
      $sql = "SELECT *
              FROM products
              WHERE rating = 1";
      $result = mysqli_query($connect, $sql);
      $queryResult = mysqli_num_rows($result);
      include 'php/fetchresult.php';
    }
	  else if(isset($_POST['25to30'])){
      $sql = "SELECT *
              FROM products
              WHERE price <= 30 AND price >= 25";
      $result = mysqli_query($connect, $sql);
      $queryResult = mysqli_num_rows($result);
      include 'php/fetchresult.php';
    }
	  else if(isset($_POST['20to25'])){
      $sql = "SELECT *
              FROM products
              WHERE price <=25 AND price >= 20";
      $result = mysqli_query($connect, $sql);
      $queryResult = mysqli_num_rows($result);
      include 'php/fetchresult.php';
    }
	  else if(isset($_POST['15to20'])){
      $sql = "SELECT *
              FROM products
              WHERE price <= 20 AND price >= 15";
      $result = mysqli_query($connect, $sql);
      $queryResult = mysqli_num_rows($result);
      include 'php/fetchresult.php';
    }
	  else if(isset($_POST['10to15'])){
      $sql = "SELECT *
              FROM products
              WHERE price <= 15 AND price >= 10";
      $result = mysqli_query($connect, $sql);
      $queryResult = mysqli_num_rows($result);
      include 'php/fetchresult.php';
    }
   ?>
</div>

<?php
  include 'php/footer.php';
?>
