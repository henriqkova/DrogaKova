<?php
    $conn = mysqli_connect("localhost:3307", "root", "", "drogakovadb");

    if(!$conn){
        echo "Falha ao conectar no banco: " + mysqli_connect_error();
    }
?>