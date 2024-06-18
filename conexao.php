<?php 
    $dbHost = 'Localhost';
    $username = 'root';
    $password = "123456";
    $database = "cadastrofilmes";

    $conn = mysqli_connect($dbHost, $username, $password, $database);

    if ($conn ->connect_error) {  
        echo "Erro"; 

    }

?>