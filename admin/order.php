<?php
    include "./database/database.php";

    $database = new Database();
    $db = $database->connect();

    $id = $_GET["id"];

    $query = "UPDATE `orders` SET `action`='completed' WHERE id=$id";
    $db->prepare($query);
    $db->execute();

    header("location: ./completed-orders.php");
    
?>