<!-- Search Page -->
<?php
  include 'php/header.php';
?>

  <div class="product-container">
    <h1>Search Page</h1><br>
    <!-- PHP and SQL statment to search database based on user's search words -->
    <?php
      //Runs this if user clicks on the search icon in header
      if(isset($_POST['submit-search'])){
        //Avoid SQL injection through user's use of the searchbar and escape special characters
        //in this string for use during SQL statement
        $search = mysqli_real_escape_string($connect, $_POST['search']);
        //Select the products where the categories are similar to the user's search word
        $sql = "SELECT *
                FROM products
                WHERE name LIKE '%$search%' OR
                      type LIKE '%$search%' OR
                      hold LIKE '%$search%' OR
                      shine LIKE '%$search%' OR
                      scent LIKE '%$search%'";
        //Run the query in the database
        $result = mysqli_query($connect, $sql);
        //Determine the number of records that were queried
        $queryResult = mysqli_num_rows($result);

        //If one or more records were queried, display them
        if($queryResult > 0){
          echo "There are " . $queryResult . " results";
          include 'php/fetchresult.php';
        }
        //Else, display this message
        else {
          echo "There are no results matching your search";
        }
      }
     ?>

  </div>

<?php
  include 'php/footer.php';
 ?>
