<!-- Grim Grease Matte Cream Page -->
<?php
  include 'php/header.php';
?>
<div class="indivProdContainer">
  <?php
      $sql = "SELECT *
              FROM products
              WHERE name ='Grim Grease Matte Cream'";

      $result = mysqli_query($connect, $sql);
      $queryResult = mysqli_num_rows($result);
      include 'php/fetchresult.php';
    ?>
</div>
<div class="cta">
  <button class="cta-add">Add To Cart</button>
</div>

<?php
  include 'php/footer.php';
?>
