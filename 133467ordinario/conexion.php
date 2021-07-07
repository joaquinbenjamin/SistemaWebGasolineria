<?php 
    $conn = new mysqli('localhost','root','','133467ordinario');
    if($conn->connect_error){
        echo $error -> $conn->connect_error;
    }
?>