<?php

include "connection.php";
$conn->select_db("crud1");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM clients WHERE id = $id";
    $conn->query($sql);
}

header("location: index.php");
exit;
