<!-- Page to add products to the database -->
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Insert Data</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
  <body>

    <div class='container'>
			<h1>Add New Product</h1><br><br>
      <!-- Form to have user enter in values for new product's record in database -->
      <form action="php/insertdata.php" method="POST" enctype="multipart/form-data">
        <p>
          <b>Name: </b>
          <input class='inputtext' type="text" name="product_name" id="productName">
        </p><br>
				<p>
          <b>Type: </b>
          <input class='inputtext' type="text" name="product_type" id="productType">
        </p><br>
        <p>
          <b>Hold: </b>
          <input class='inputtext' type="text" name="product_hold" id="productHold">
        </p><br>
        <p>
          <b>Shine: </b>
          <input class='inputtext' type="text" name="product_shine" id="productShine">
        </p><br>
        <p>
          <b>Scent: </b>
          <input class='inputtext' type="text" name="product_scent" id="productScent">
        </p><br>
        <p>
          <b>Rating: </b>
          <input class='inputtext' type="text" name="product_rating" id="productRating">
        </p><br>
        <p>
          <b>Price: </b>
          <input class='inputtext' type="text" name="product_price" id="productPrice">
        </p><br>
        <p>
          <b>Image: </b>
          <input type="file" name="file">
        </p><br>
        <p>
          <button class="btn" type="text" name="submit" id="submit">Submit</button>
        </p><br>
      </form>
    </div>
  </body>
  </html>
