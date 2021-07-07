<!-- Code to fetch results and display info for products-->
<?php
  //Using the $result from a given page, get the results and display all products
  while($row = mysqli_fetch_assoc($result)){
    $name = "<h3>" . $row['name'] . "</h3>";
    $img = "<p><a href='". $row['prodPage'] . "'><img src='images/" . $row['img'] . "'></a></p>";
    $hold = "<p><b>Hold: </b>" . $row['hold'] . "</p>";
    $shine = "<p><b>Shine: </b>" . $row['shine'] . "</p>";
    $scent = "<p><b>Scent: </b>" . $row['scent'] . "</p>";
    $rating = "<p><b>Rating: </b>" . str_repeat("✯", $row['rating']) . "</p>";
    $price = "<p><b>Price: </b>$" . $row['price'] . "</p>";

    echo "<div class='product-info'>" . $name . $img . $hold . $shine . $scent . $rating . $price . "</div>";
  }
?>
