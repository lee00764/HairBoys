<!-- Connect to database -->
<?php
  //Parameters for connection
  $server = "localhost";
  $username = "root";
  $password = "";
  $database = "hairboys";

  //Connect to hairboys database
  $connect = mysqli_connect($server, $username, $password, $database);
?>
