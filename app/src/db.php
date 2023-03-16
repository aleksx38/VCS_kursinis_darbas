<?php
    $dbServer = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "baigiamasis";


    $conn = mysqli_connect($dbServer, $dbUsername, $dbPassword, $dbName);
    
    if($conn->connect_error) {
        echo "Atsiprasome, ivyko klaida\n";
        echo 'Klaida: ' . $mysqli->connect_error . '\n';
        exit();
    }

    ?>