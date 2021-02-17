<?php
    $servername = "mysqlc";
    $username = "root";
    $password = "ximena1984";
    
    $conn = mysqli_connect($servername, $username, $password);
    if (!$conn) {
      echo "Connection failed";
      exit;
    }
    
    echo "Connection successful";
    print_r($conn);
