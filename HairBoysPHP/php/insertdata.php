<!-- PHP to used in addproduct.php to actually add the values of the new product to the database -->
<?php
  //Allow connection to database
  include 'dbh.php';
  //Variables to retrieve values from the addproduct.php form
  $name = $_POST['product_name'];
  $type = $_POST['product_type'];
  $hold = $_POST['product_hold'];
  $shine = $_POST['product_shine'];
  $scent = $_POST['product_scent'];
  $rating = $_POST['product_rating'];
  $price = $_POST['product_price'];

  //Once user has clicked on 'submit', run checks for valid image upload
  if (isset($_POST['submit'])){
    //Extract the name of the file and place it into this variable
		$fileName = $_FILES['file']['name'];
		//Extract the temporary location name of the file and place it into this variable
		$fileTmpName = $_FILES['file']['tmp_name'];
		//Extract the size of the file and place into this variable
		$fileSize = $_FILES['file']['size'];
    //Image size cannot be larger than 1mb
    $maxFileSize = 1048576;

    //Location where the file will be uploaded
		$imgLocation = '../images/'.$fileName;

    //Determine the file extension by exploding the file name and extension into a string array
		$fileExt = explode('.', $fileName);
		//Convert the last index of the array (the extension) to lowercase
		$fileActualExt = strtolower(end($fileExt));
		// Extensions that are allowed to be uploaded
		$validExt = array('jpg','png','jpeg');

    //Determine if the file extension matches the extensions within the allowed array
			if(in_array($fileActualExt, $validExt)){
				//If the file size is less than 2mb
				if($fileSize < $maxFileSize){
					//Move file from temporary location to img directory
					if(move_uploaded_file($fileTmpName, $imgLocation)){
            //If all is successful, insert values of the form to the database
            $sql = "INSERT INTO products (name, img, type, hold, shine, scent, rating, price)
                    VALUES ('$name', '$fileName', '$type', '$hold', '$shine', '$scent', '$rating', '$price');";
            mysqli_query($connect, $sql);
						echo "Success. <a href='../index.php'>Return</a>";
					}
				}
			}
			else{
				echo "Issue with inserting data. <a href='../index.php'>Return</a>";
			}
  }
?>
