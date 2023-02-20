<?php
  
  include_once 'includes/dbh.php';
  
  $sql_cmd = $_POST['query'];
  $result = mysqli_query($conn, $sql_cmd);

  mysqli_close($conn);
?>