<?php
    require "./database/database.php";
    $database = new Database();
    $db = $database->connect();

    $id = $_GET["id"];
    $query = "DELETE FROM `products` WHERE id=$id";
    $res = $db->prepare($query);
    $res->execute();

    header("location: ./delete-products.php");
    
