<?php

    $sname = "localhost:3306";
    $uname = "root";
    $password = "Ab@13446";

    $db_name = "webApp";

    $conn = mysqli_connect($sanme, $uname, $password, $webApp);

    if(!$conn){
        echo "Connectivity failed";
        
    }